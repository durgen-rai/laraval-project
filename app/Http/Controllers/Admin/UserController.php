<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AddFormValidation;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data=[];
        $data['rows']=User::select('id','created_at','email','status')->get();
        //dd($data['rows']);
        return view('admin.user.index',compact('data'));
    }

    public function create()
    {
        $user= new User();
        return view('admin.user.create',compact('user'));
    }

    public function store(AddFormValidation $request)
    {

        $user=new User();
        $user->username=$request->get('username');
        $user->email=$request->get('email');
        $user->password=bcrypt($request->get('password'));
        $user->full_name=$request->get('full_name');
        $user->contact_no=$request->get('contact_no');
        $user->address=$request->get('address');
        $user->status=$request->get('status')=='active'?1:0;
        $user->save();

       // return redirect(route('admin.user'));
        return redirect(route('admin.user'));
    }

    public function edit( User $user)
    {
        return view('admin.user.edit',compact('user'));
    }
}
