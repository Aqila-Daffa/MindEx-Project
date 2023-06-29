<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function register(Request $request){
        $val = $request->validate([
            'username' => 'required|min:3|max:100|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
        ]);
        
        $val['password'] = Hash::make($val['password']);

        User::create($val);
        
        return response('User register successfully.');
    }

    public function login(Request $request)
    {
        $cred = $this->validate($request, [
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
            return response('User Login Successful!');
        }else{
            return response('Login Failed, Please try again!');
        }  
    }

    public function profileData(){
        $userId = auth()->user()->id;
        $user = User::where("id", $userId)->get();
        return response($user);
    }

    public function updateProfile(Request $request)
    {
        $val = $request->validate([
            'fullname' => 'required|min:3|max:100',
            'address' => 'required|min:3|max:250',
            'phone' => 'required|numeric',
            'birthdate' => 'required|min:3|max:100',
        ]);
        
        $userId = auth()->user()->id;
        $userUpdt = User::findorfail($userId);
        $userUpdt->update($val);
        return response('Profile Updated Successfully');
    }
}
