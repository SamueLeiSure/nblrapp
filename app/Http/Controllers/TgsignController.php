<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tgsign;
use DB;

class TgsignController extends Controller
{
    public function index()
    {
        $count = DB::table('tgsigns')
                        ->select(DB::raw('county, count(*) as count'))
                        ->where('state', '=', '已领')
                        ->groupBy('county')
                        ->get();
    	return view('tgsign.index')->withTgsigns(Tgsign::all())->withCounts($count);
    }

    public function create()
    {
    	return view('tgsign.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'county' => 'required',
    		'name' => 'required',
    		'state' => 'required',
    	]);

    	$tgsign = new Tgsign;
    	$tgsign->county = $request->get('county');
    	$tgsign->name = $request->get('name');
    	$tgsign->state = $request->get('state');

    	if ($tgsign->save())
    		return redirect('tgsign');
    	else
    		return redirect()->back()->withInput()->withErrors('新增失败！');
    }

    public function edit($id)
    {
    	return view('tgsign.edit')->withTgsign(Tgsign::find($id));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'county' => 'required',
    		'name' => 'required',
    		'state' => 'required',
    	]);

    	$tgsign = Tgsign::find($id);
    	$tgsign->county = $request->get('county');
    	$tgsign->name = $request->get('name');
    	$tgsign->state = $request->get('state');

    	if ($tgsign->save())
    		return redirect('tgsign');
    	else
    		return redirect()->back()->withInput()->withErrors('编辑失败！');
    }

    public function destroy($id)
    {
    	Tgsign::find($id)->delete();
    	return redirect()->back();
    }
}
