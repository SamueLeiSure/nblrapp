<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class Usercontroller extends Controller
{
    public function index()
    {
    	return view('admin.user.index')->withUsers(User::all()->whereIn('role', ['0','1']));
    }

    public function setboss($id)
    {
    	$user = User::find($id);
    	$user->role = '1';

    	if ($user->save())
    		return redirect('admin/user');
    	else
    		return redirect()->back()->withInput()->withErrors('编辑失败！');
    }

    public function cancelboss($id)
    {
    	$user = User::find($id);
    	$user->role = '0';

    	if ($user->save())
    		return redirect('admin/user');
    	else
    		return redirect()->back()->withInput()->withErrors('编辑失败！');
    }
}
