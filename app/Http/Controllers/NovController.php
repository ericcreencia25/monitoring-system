<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class NovController extends Controller
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
        return view('user.nov');
    }

    public function novList()
    {
        return view('user.nov-list');
    }

    public function submitNOV(Request $request)
    {
        $EmbID = $request->EmbID;
        $ID = $request->ID;
        $CaseNumber = $request->CaseNumber;
        $Name = $request->Name;
        $CompanyName = $request->CompanyName;
        $Email = $request->Email;
        $ContactNo = $request->ContactNo;
        $Address = $request->Address;
        $DateSchedule = date("m/d/Y", strtotime($request->DateSchedule));
        $TimeSchedule = date("H:i:s", strtotime($request->TimeSchedule));
        $WebConferencing = $request->WebConferencing;
        $MinumFine = $request->MinumFine;
        $MaximumFine = $request->MaximumFine;

        $Status = $request->Status;

        $arrayFindings = $request->arrayFindings;

        $report_id = $request->report_id;
        $Sector = json_encode($request['Sector']);

        if ($ID) {

            $now = new \DateTime();

            $nov = DB::table('nov')->where('id', $ID)
                ->update([
                    'case_number' => $CaseNumber,
                    'name' => $Name,
                    'company_name' => $CompanyName,
                    'email' => $Email,
                    'contact_no' => $ContactNo,
                    'address' => $Address,
                    'date_schedule' => $DateSchedule,
                    'time_schedule' => $TimeSchedule,
                    'web_conferencing' => $WebConferencing,
                    'minimum_fine' => $MinumFine,
                    'maximum_fine' => $MaximumFine,
                    'status' => $Status,
                ]);


            if (!empty($arrayFindings)) {
                DB::table('nov-findings')->where('nov_id', $ID)->delete();

                foreach ($arrayFindings as $key => $value) {
                    $now = new \DateTime();

                    $nov = DB::table('nov-findings')->insert([
                        'nov_id' => $ID,
                        'prohibited_act' => $value[2],
                        'findings' => $value[0],
                        'findings_description' => $value[1],
                        'created_by' => auth()->user()->name,
                        'created_date' => $now->format('Y-m-d H:i:s')
                    ]);
                }

            } else {

                DB::table('nov-findings')->where('nov_id', $ID)->delete();

            }

        } else {

            $now = new \DateTime();

            $novID = DB::table('nov')->insertGetId([
                'emb_id' => $EmbID,
                'report_id' => $report_id,
                'case_number' => $CaseNumber,
                'name' => $Name,
                'company_name' => $CompanyName,
                'email' => $Email,
                'contact_no' => $ContactNo,
                'address' => $Address,
                'date_schedule' => $DateSchedule,
                'time_schedule' => $TimeSchedule,
                'web_conferencing' => $WebConferencing,
                'created_by' => auth()->user()->name,
                'created_date' => $now->format('Y-m-d H:i:s'),
                'sector' => $Sector,
                'minimum_fine' => $MinumFine,
                'maximum_fine' => $MaximumFine,
                'status' => $Status,
            ]);

            if ($arrayFindings) {

                foreach ($arrayFindings as $key => $value) {
                    $now = new \DateTime();

                    $nov = DB::table('nov-findings')->insert([
                        'nov_id' => $novID,
                        'prohibited_act' => $value[2],
                        'findings' => $value[0],
                        'findings_description' => $value[1],
                        'created_by' => auth()->user()->name,
                        'created_date' => $now->format('Y-m-d H:i:s')
                    ]);
                }

            }

        }

        return "Success";

    }

    public function eccConditionalitites(Request $request)
    {
        $ecc_conditionalities = DB::table('ecc_conditionalities')->get();

        return DataTables::of($ecc_conditionalities)
            ->addColumn('ApplicableLaws', function ($ecc_conditionalities) {
                $details = $ecc_conditionalities->applicable_laws;
                return $details;
            })
            ->addColumn('ComplianceReq', function ($ecc_conditionalities) {
                $details = '<a style="display: block;
            width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap; "> ' . $ecc_conditionalities->compliance_req . '</a>';
                return $details;
            })
            ->addColumn('Complied', function ($ecc_conditionalities) {
                $details = '';
                return $details;
            })
            ->addColumn('Remarks', function ($ecc_conditionalities) {
                $details = '';
                return $details;
            })
            ->addColumn('Action', function ($ecc_conditionalities) {
                $details = '';
                return $details;
            })
            ->rawColumns(['ApplicableLaws', 'ComplianceReq', 'Complied', 'Remarks', 'Action'])
            ->make(true);
    }

    public function getNOVList(Request $request)
    {

        $nov = DB::table('nov')->get();

        return DataTables::of($nov)
            ->addColumn('case_number', function ($nov) {
                $details = $nov->case_number;
                return $details;
            })
            ->addColumn('name', function ($nov) {
                $details = $nov->name;
                return $details;
            })
            ->addColumn('company_name', function ($nov) {
                $details = $nov->company_name;
                return $details;
            })
            ->addColumn('violation_for', function ($nov) {
                $str = isset($nov->sector) ? json_decode($nov->sector) : '';
                $details = '<p class="text-sm">' .implode(", ", $str) . '</p>';
                return $details;
            })
            
            ->addColumn('action', function ($nov) {
                $button = '<div class="btn-group">';
                $button .= '<button class="btn btn-default btn-flat" title="view" onclick="viewNOV(' . $nov->id . ')"><i class="fa-solid fa-eye"></i></button><button class="btn btn-default btn-flat" title="delete" onclick="deleteNOV(' . $nov->id . ')"><i class="fa-solid fa-trash"></i></button><button class="btn btn-default btn-flat" title="PDF" onclick="viewPDF(' . $nov->id . ')"><i class="fa-solid fa-file fa-beat-fade"></i></button>';
                $button .= '</div>';
                return $button;
            })
            ->rawColumns(['case_number', 'name', 'company_name', 'action', 'violation_for'])
            ->make(true);

    }

    public function getNOVListbyEMBID(Request $request)
    {
        $emb_id = $request->emb_id;
        $nov = DB::table('nov')
            ->where('emb_id', $emb_id)
            ->get();

        return DataTables::of($nov)
            ->addColumn('case_number', function ($nov) {
                $details = '<em><b><p class="text">' . $nov->case_number . '</a></b></em>';
                return $details;
            })
            ->addColumn('sector', function ($nov) {
                $details = json_decode($nov->sector);
                return $details;
            })
            ->addColumn('action', function ($nov) {
                $btn = '<div class="btn-group">';
                $btn .= '<button class="btn btn-default btn-flat" title="view" onclick="viewNOV(' . $nov->id . ')"><i class="fa-solid fa-eye"></i></button>';

                if (empty($nov->report_id)) {
                    $btn .= '<button class="btn btn-default btn-flat" title="link to report" onclick="linkToReport(' . $nov->id . ', \'' . $nov->emb_id . '\')"><i class="fa-solid fa-link"></i></button>';
                }

                $btn .= '</div>';
                return $btn;
            })
            ->rawColumns(['case_number', 'sector', 'action'])
            ->make(true);

    }

    public function getNOVview(Request $request)
    {
        $array = array();
        $ID = $request->ID;
        $nov = DB::table('nov')->where('id', $ID)->first();
        $findings = DB::table('nov-findings')->where('nov_id', $ID)->get();

        // $data = array_push($array, $nov[0]);
        $array[] = $nov;
        $array[] = $findings;

        return $array;
    }

    public function addProhibitedActs(Request $request)
    {
        $OthersProhibitedActs = $request->OthersProhibitedActs;
        $now = new \DateTime();

        $check = DB::table('prohibited_acts')->where('prohibited_acts', $OthersProhibitedActs)->first();

        if ($check) {

            return 'Existing Prohibited Act/s';

        } else {

            $data = DB::table('prohibited_acts')->insert([
                'prohibited_acts' => $OthersProhibitedActs,
                'created_by' => auth()->user()->name,
                'created_date' => $now->format('Y-m-d H:i:s'),
            ]);

            return 'Successfully added';

        }

    }

    public function getProhibitedActs(Request $request)
    {
        $data = DB::table('prohibited_acts')->get();

        return $data;
    }

    public function getNOVbyID(Request $request)
    {
        $report_id = $request->report_id;
        $data = DB::table('nov')
            ->where('report_id', $report_id)
            ->get();

        return $data;
    }


    public function saveLinkFromNOVToReports(Request $req)
    {
        $novid = $req->novid;
        $reportid = $req->reportid;
        $emb_id = $req->emb_id;

        try {
            $data = DB::table('nov')
                ->where([
                    ['emb_id', $emb_id],
                    ['id', $novid],
                ])
                ->update([
                    'report_id' => $reportid
                ]);

                return 'success';

        } catch (\Throwable $e) {
            report($e);

            return false;
            
        }
    }

    public function deleteNOV(Request $req) 
    {
        $id = $req->id;

        try {

            $data = DB::table('nov')->where('id', $id)->delete();

            return "success";

        } catch (\Throwable $e) {

            report($e);

            return false;

        }
    }

    public function novListDropdown(Request $req)
    {
        $data = DB::table('nov')->get();

        return $data;
    }




}