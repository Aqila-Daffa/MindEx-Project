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
            $user=User::where('email', $cred['email'])->get();
            return response($user);
        }else{
            return response('Login Failed, Please try again!');
        }  
    }

    public function profileData(Request $request){
        $val = $request->validate([
            'email' => 'required|email:dns',
        ]);
        $user = User::where("email", $val['email'])->get();
        return response($user);
    }

    public function updateProfile(Request $request)
    {
        $val = $request->validate([
            'username' => 'required|min:3|max:100|unique:users',
            'fullname' => 'required|min:3|max:100',
            'address' => 'required|min:3|max:250',
            'phone' => 'required|numeric',
            'birthdate' => 'required|min:3|max:100',
        ]);
        
        $userName = $val['username'];
        $userUpdt = User::findorfail($userName);
        $userUpdt->update($val);

        $user = User::where("email", $val['username'])->get();
        return response($user);
    }
}
