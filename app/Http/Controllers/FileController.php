<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Response;
use App\File;

class FileController extends Controller
{
	public function index()
	{
		return view('file.index')->withFiles(File::all());
	}
	public function create()
	{
		return view('file.create');
	}

    public function upload(Request $request)
    {
 		$file = $request->source;

 		if ($file->isValid()) {
 			//Storage::disk('public')->put($path, $file); //This is another way to save files.
 			$filename = $file->getClientOriginalName();

 			$fileext = $file->getClientOriginalExtension();
 			$filerename = date('Y_m_d_His') .'_' .uniqid() .'.' .$fileext; //because there's no good idea to figure out the Chinese.
 			$filecode = strtok($filename, ' ');
 			$filetitle = strtok('.');

 			$path = $request->source->storeAs('myfiles', $filerename, 'public');

 			$newfile = new File;
 			$newfile->title = $filetitle;
 			$newfile->code = $filecode;
 			$newfile->path = $path;
 		}

 		if ($newfile->save())
    		return redirect('file');
    	else
    		return redirect()->back()->withInput()->withErrors('新增失败！');
 	}

 	public function show($id)
 	{
 		//$file = Storage::disk('public')->get('pdf/filename1.pdf'); //The way get original file.

 		return view('file.show')->withFile(File::find($id));
 	}

 	public function destroy($id)
 	{
 		$file = File::find($id);
 		//echo $file->path;
 		Storage::disk('public')->delete($file->path);
 		if ($file->delete())
 			return redirect()->back();
 	}
}
