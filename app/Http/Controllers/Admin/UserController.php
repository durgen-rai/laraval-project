<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AddFormValidation;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [];
        $data['rows'] = User::select('id', 'created_at', 'email', 'status')->get();
        //dd($data['rows']);
        return view('admin.user.index', compact('data'));
    }

    public function create()
    {
        $user = new User();
        return view('admin.user.create', compact('user'));
    }

    public function store(AddFormValidation $request)
    {

        $user = new User();
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->full_name = $request->get('full_name');
        $user->contact_no = $request->get('contact_no');
        $user->address = $request->get('address');
        $user->status = $request->get('status') == 'active' ? 1 : 0;
        $user->save();

        // return redirect(route('admin.user'));
        return redirect(route('admin.user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'username' => $request->username,
            'full_name' => $request->full_name,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('admin.user');
    }
}
