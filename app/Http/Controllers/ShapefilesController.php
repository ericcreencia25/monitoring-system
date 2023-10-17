<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Models\Gallery;
use App\Models\Shapefiles;


class ShapefilesController extends Controller
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
    public function index($ID)
    {
        return view('user.shapefiles.shapefiles', compact('ID'));
    }

    public function shapefilestest(Request $request)
    {
        return view('user.shapefiles.shapefilestest');
    }
    public function store(Request $request)
    {
        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();

        $emb_id = $request->emb_id;

        $size = $image->getSize();
        $filesize = $size * 0.001;
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $size = $filesize;
        $file_name = $filename . '-' . time() . '.' . $extension;
        $image->move(public_path('uploads/gallery/'.$emb_id), $file_name);

        $imageUpload = new Shapefiles;
        $imageUpload->emb_id = $emb_id;
        $imageUpload->company_name = $request->company_name;
        $imageUpload->original_filename = $fileInfo;
        $imageUpload->file_name = $file_name;
        $imageUpload->file_size = $size;
        $imageUpload->file_extension = $extension;
        $imageUpload->created_by = auth()->user()->name;
        $imageUpload->save();
        
        return Redirect::back()->with('message','Operation Successful !');
        // return response()->json(['success' => $file_name]);
    }

    public function getImages(Request $request)
    {
        $emb_id = $request->emb_id;
        $images = Shapefiles::where('emb_id', $emb_id)->get()->toArray();
        
        foreach ($images as $image) {
            $tableImages[] = $image['file_name'];
        }
        $storeFolder = public_path('uploads/gallery/'.$emb_id);
        $file_path = public_path('uploads/gallery/'.$emb_id);
        $files = scandir($storeFolder);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..' && in_array($file, $tableImages)) {
                $obj['name'] = $file;
                $file_path = public_path('uploads/gallery/'.$emb_id . '/') . $file;
                $obj['size'] = filesize($file_path) * 0.001;
                $obj['path'] = url('public/uploads/gallery/'. $emb_id . '/' . $file);
                $data[] = $obj;
            }

        }
        
        return response()->json($images);
    }


    public function destroy(Request $request)
    {
        $filename = $request->get('filename');
        Gallery::where('filename', $filename)->delete();
        $path = public_path('uploads/gallery/') . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return response()->json(['success' => $filename]);
    }

}