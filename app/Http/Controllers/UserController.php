<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Enrollments;
// use Illuminate\Foundation\Auth\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->except([Auth::id()]);
        return view('user', compact('users'));
    }

    public function account(User $user)
    {
        $user = User::find(Auth::id());
        $roles = Role::pluck('name', 'id');
        $submitbuttontext = "Update";
        return view('users.edit', compact('submitbuttontext', 'user', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $submitbuttontext = "Create";
        $roles = Role::pluck('name', 'id');
        return view('users.create', compact('submitbuttontext', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->role()->attach($input['role']);
        \Session::flash('flash_message', 'Đã tạo tài khoản mới!');
        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $submitbuttontext = "Update";
        $user = User::find($id);
        $roles = Role::pluck('name', 'id');
        return view('users.edit', compact('submitbuttontext', 'user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $input = $request->all();
        if(empty($request->password)) {
            $input = $request->except('password');
        }
        $user = User::find($user);
        $input['password'] = Hash::make($input['password']);
        $user->update($input);
        $user->role()->sync($input['role']);
        \Session::flash('flash_message', 'Tài khoản được cập nhật!');
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        \Session::flash('flash_message', 'Tài khoản đã bị xóa!');
        return redirect(route('user.index'));
    }
}
