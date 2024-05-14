<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserLoginRequest;
use App\Http\Requests\User\UserRegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;

class Account extends Controller
{

    //start authenticate
    public function login()
    {
        return view('customer.account.login');
    }
    public function doLogin(UserLoginRequest $request)
    {
        $check = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'level' => 0]);
        if ($check == true) {
            return redirect()->route('home.index');
        } else {
            return redirect()->back()->with('message', 'Login Failed');
        }
    }
    public function register()
    {
        return view('customer.account.register');
    }
    //end authenticate


    public function saveUser(UserRegisterRequest $request)
    {
        $password = Hash::make($request->password);
        ModelsUser::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $password,
            'level' => 0,
        ]);

        return redirect()->route('user.login')->with('alert', 'Sign Up Successfully !');
    }

    public function sign_out()
    {
        Auth::logout();
        return redirect()->route('home.index');
    }
}
