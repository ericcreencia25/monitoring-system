<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use PDF;
use File;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function bookmark()
    {
        return view('user.saved-list');
    }


    public function establishmentAll(Request $request)
    {
        // dd($request);
        // $url = 'https://iis.emb.gov.ph/embis/api/Pbs/emeis_company_api?search=&limit=1000&offset=' . $request->start;
        $url = 'https://iis.emb.gov.ph/embis/api/Pbs/emeis_company_api?search='.$request->search["value"].'&limit='.$request->length.'&start='.$request->start.'&draw='.$request->draw;
        // $url = 'https://iis.emb.gov.ph/embis/api/Pbs/emeis_company_api?search='.$request->search["value"].'&limit=10&start=10&draw=2';
        $client = new Client(['verify' => false]);
        $res = $client->get($url);

        $result = json_decode($res->getBody(), true);

        return $result;
        
        // return DataTables::of($result['data'])
        //     ->addColumn('Action', function ($result) {
        //         if ($result['establishment_name'] != '' || $result['establishment_name'] != null) {
        //             $name = $result['establishment_name'];
        //         } else {
        //             $name = $result['company_name'];
        //         }
        //         $details = '<a href="#" class="flex justify-between items-center" style="height: 60px;" onclick="getEstablishmentDetails(' . $result['cnt'] . ')">
        //         <h3 class="text-sm font-semibold text-gray-500">' . $name . '</h3>
        //         <p class="text-md text-gray-400"></p>
        //     </a>';
        //         return $details;
        //     })
        //     ->rawColumns(['Action'])
        //     ->setTotalRecords($result['recordsTotal'])
        //     ->setFilteredRecords($result['recordsFiltered'])
        //     ->make(true);
    }


    public function findSMR(Request $request)
    {
        $url = 'https://iis.emb.gov.ph/embis/api/emeis/establishment_details?company_id=' . $request->company_id;
        $client = new Client(['verify' => false]);
        $res = $client->get($url);

        $result = json_decode($res->getBody(), true);

        return $result;
    }

    public function establishmentDetails(Request $request)
    {
        $url = 'https://iis.emb.gov.ph/embis/api/Pbs/emeis_getcompanybycnt?cnt=' . $request->cnt;
        $client = new Client(['verify' => false]);
        $res = $client->get($url);

        $result = json_decode($res->getBody(), true);


        $emb_id = $result[0]['emb_id'];

        $saved = DB::table('saved_company')->where('emb_id', $emb_id)->count();
        $result[1] = $saved;

        return $result;
    }

    public function favoriteAdd(Request $request)
    {
        $company_name = $request->company_name;
        $emb_id = $request->emb_id;
        $establishment_name = $request->establishment_name;
        $theme = $request->theme;
        $cnt = $request->cnt;

        $now = new \DateTime();

        if ($theme == 'yellow') {

            DB::table('saved_company')->insert([
                'company_name' => $company_name,
                'emb_id' => $emb_id,
                'cnt' => $cnt,
                'establishment_name' => $establishment_name,
                'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
            ]);

        } else {
            $data = DB::table('saved_company')->where('emb_id', $emb_id)->count();

            if ($data > 0) {
                DB::table('saved_company')->where('emb_id', $emb_id)->delete();
            }
        }
    }

    public function bookmarkGet(Request $request)
    {
        $result = DB::table('saved_company')
            ->where('created_by', auth()->user()->name)
            ->orderByRaw('created_date DESC')
            ->get();

        return DataTables::of($result)
            ->addColumn('Action', function ($result) {
                if ($result->establishment_name != '' || $result->establishment_name != null) {
                    $name = $result->establishment_name;
                } else {
                    $name = $result->company_name;
                }
                $details = '<a href="#" class="flex justify-between items-center" style="height: 60px;" onclick="getEstablishmentDetails(' . $result->cnt . ')">
                    <h3 class="text-sm font-semibold text-gray-500">' . $name . '</h3>
                    <p class="text-md text-gray-400"></p>
                </a>';
                return $details;
            })
            ->rawColumns(['Action'])
            ->make(true);
    }

    public function getSignaturesList(Request $request)
    {
        $result = DB::table('regional_director')
            // ->orderByRaw('created_date DESC')
            ->get();

        return DataTables::of($result)
            ->addColumn('name', function ($result) {
                $details = $result->name;

                return $details;
            })
            ->addColumn('region', function ($result) {
                $details = $result->region;

                return $details;
            })
            ->addColumn('signature', function ($result) {
                $details = '<button class="btn btn-flat btn-info" onclick="view('.$result->id.')">view</button>';
                $details .= '<button class="btn btn-flat btn-primary" onclick="upload('.$result->id.')">upload</button>';
                $details .= '<button class="btn btn-flat btn-danger" onclick="deleteSignature('.$result->id.')">delete</button>';

                return $details;
            })
            ->rawColumns(['name', 'region', 'signature'])
            ->make(true);
    }

    public function uploadSignature(Request $request)
    {
        $now = new \DateTime();
        $id = $request->id;
        $getMAC = exec('getmac');
        $MAC = explode(" ", $getMAC);

        $validator = Validator::make($request->all(), [
            // 'file' => 'required|mimes:pdf,jpeg,png,jpg,gif,geojson'
            // |max:2048
        ]);
        // $file = $request->file('file');

        if ($validator->fails()) {
            $rtrn['success'] = 0;
            $rtrn['message'] = $validator->errors()->first('file'); // Error response

        } else {
            if ($request->file('file')) {
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();

                // $filename = $NewGUID;
                // filesize
                $size = $file->getSize();
                $filesize = $size * 0.001;
                // File extension
                $extension = $file->getClientOriginalExtension();

                $path = public_path('Signature/' . $id . '/');
                // $savedFiles = $pdf->saveAs($urlSavePDF);

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0755, true, true);

                    // File upload location
                    $location = 'Signature/' . $id . '/';

                    // // Upload file
                    $file->move($location, $filename . '.' . $extension);

                } else {
                    $location = 'Signature/' . $id . '/';

                    $file->move($location, $filename . '.' . $extension);
                }

                // File path
                // $filepath = public_path('files/'.$NewGUID.'.'.$extension);
                $filepath = 'Signature/'.  $id . '/' . $filename;


                $save = DB::table('regional_director')->where('id', $id)
                ->update([
                    'directory' => public_path(),
                    'file_name' => $filename,
                    'file_path' => $filepath,
                    'file_extension' => $extension,
                ]);

                if ($save) {
                    $rtrn['success'] = 1;
                    $rtrn['message'] = 'File uploaded.';
                }
            } else {
                // Response
                $rtrn['success'] = 2;
                $rtrn['message'] = 'File not uploaded.';
            }
        }

        return $rtrn;
    }

    public function getSignature(Request $request)
    {
        $data = DB::table('regional_director')->where('id', $request->id)->first();

        return $data;
    }



}