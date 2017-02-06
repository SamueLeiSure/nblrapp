<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Response;

class FileController extends Controller
{
	public function show()
	{
		return view('file.upload');
	}

    public function upload(Request $request)
    {

 		$file = $request->source;
 		$filename = $file->getClientOriginalName();
 		$ext = $file->getClientOriginalExtension();

 		//$path = date('Y_m_d_His') .'_' .uniqid(). '_' .$file->getClientOriginalExtension();
 		$path = date('Y_m_d_') .$ext;

 		if ($file->isValid()) {
 			//echo "haha";
 			//Storage::disk('public')->put($path, $file);
 			$request->source->storeAs($path, $filename, 'public');
 		} else {
 			echo "bb";
 		}

 		//var_dump($bool);
 		//return view('welcome');
 	}

 	public function viewpdf()
 	{
 		$file = Storage::disk('public')->get('pdf/filename1.pdf');
 		//echo $file;
 		//return new Response($file, 200);
 	}
}
