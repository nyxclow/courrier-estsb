<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $users= User::latest()->get();
        return view('admin.users.index',compact('users'));
    }
    public function add()
    {
        return view('admin.users.add');
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.users.edit',compact('users'));
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('succes','user suprimee');
    }
}
