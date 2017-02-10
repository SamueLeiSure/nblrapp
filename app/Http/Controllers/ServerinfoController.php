<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serverinfo;

class ServerinfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('serverinfo.index')->withServerinfos(Serverinfo::all());
    }

    public function create()
    {
    	return view('serverinfo.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'ip' => 'required',
    		'username' => 'required',
    		'password' => 'required',
    	]);

    	$serverinfo = new Serverinfo;
    	$serverinfo->ip = $request->get('ip');
    	$serverinfo->username = $request->get('username');
    	$serverinfo->password = $request->get('password');
    	$serverinfo->description = $request->get('description');

    	if ($serverinfo->save())
    		return redirect('serverinfo');
    	else
    		return redirect()->back()->withInput()->withErrors('新增失败！');
    }

    public function edit($id)
    {
    	return view('serverinfo.edit')->withServerinfo(Serverinfo::find($id));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'ip' => 'required',
    		'username' => 'required',
    		'password' => 'required',
    	]);

    	$serverinfo = Serverinfo::find($id);
    	$serverinfo->ip = $request->get('ip');
    	$serverinfo->username = $request->get('username');
    	$serverinfo->password = $request->get('password');
    	$serverinfo->description = $request->get('description');

    	if ($serverinfo->save())
    		return redirect('serverinfo');
    	else
    		return redirect()->back()->withInput()->withErrors('编辑失败！');
    }

    public function destroy($id)
    {
    	Serverinfo::find($id)->delete();
    	return redirect()->back();
    }
}
