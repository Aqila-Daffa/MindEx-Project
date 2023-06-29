<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }

    public function store(Request $request){
        //dd($request);
        $val = $request->validate([
            'username' => 'required|min:3|max:100|unique:users',
            //'email' => ['required', 'email:dns', 'unique:users'], the same as below
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
            'confirm_password' => 'required|same:password'
        ]);
        
        //$val['password'] = bcrypt($val['password']);
        $val['password'] = Hash::make($val['password']);

        User::create($val);
        
        return redirect('/login')->with('success', 'Registration successful! You can now login');
        //return redirect('/login')->withSuccess('Registration successful! You can now login');
    }
}
