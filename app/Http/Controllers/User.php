<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserRegisterRequest;
use App\Http\Requests\User\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\UserLoginRequest;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{

    public function logon()
    {
        return view('admin.login');
    }

    public function doLogon(UserLoginRequest $request)
    {
        $check = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'level' => 1]);
        if ($check == true) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with('message', 'Login Failed');
        }
    }

    public function sign_up()
    {
        return view('admin.signup');
    }

    public function saveUser(UserRegisterRequest $request)
    {
        $password = Hash::make($request->password);
        ModelsUser::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $password,
            'level' => 1,
        ]);

        return redirect()->route('admin.logon')->with('alert', 'Sign Up Successfully !');
    }

    public function sign_out()
    {
        Auth::logout();
        return redirect()->route('admin.logon');
    }


    public function index()
    {
        $users = ModelsUser::search()->orderBy('id', 'desc')->paginate(5)->withQueryString();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }


    public function store(UserCreateRequest $request)
    {
        $request->validated();
        $file_name = time() . $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads/user'), $file_name);
        $password = Hash::make($request->password);
        ModelsUser::create([
            'avatar' => $file_name,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'level' => $request->level,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.user.index')->with('success', 'Insert Data Successfully');
    }


    public function show($id)
    {
        $user = ModelsUser::find($id);
        return view('admin.user.detail', compact('user'));
    }


    public function edit($id)
    {
        $users = ModelsUser::all();
        $user = ModelsUser::find($id);
        return view('admin.user.edit', compact('user', 'users'));
    }


    public function update(UserUpdateRequest $request, $id)
    {
        $user = ModelsUser::find($id);
        $request->validated();
        $file_name = $user->avatar;

        if ($request->has('image')) {
            $file_name = time() . $request->image->getClientOriginalName();
            $user->avatar && unlink('uploads/user' . $user->avatar);
            $request->image->move(public_path('uploads/user'), $file_name);
        } else {
            $file_name = $user->avatar;
        }

        ModelsUser::find($id)->update([
            'avatar' => $file_name,
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.user.index')->with('success', 'Update Data Successfully');
    }

    public function destroy(ModelsUser $user)
    {
        try {
            $user->delete();
            return redirect()->route('admin.user.index')->with('success', 'Delete Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.user.index')->with('success', 'Deletion failed');
        }
    }

    public function recycle_bin()
    {
        $users = ModelsUser::onlyTrashed()->paginate(10);
        return view('admin.user.trash', compact('users'));
    }

    public function restored($id)
    {
        ModelsUser::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.user.index')->with('success', 'Restore Sucessfully');
    }
    public function force_delete($id)
    {
        ModelsUser::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('admin.user.index')->with('success', 'Delete Sucessfully');
    }
}
