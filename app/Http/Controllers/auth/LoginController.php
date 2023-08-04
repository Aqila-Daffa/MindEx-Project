<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function loginAuth(Request $request)
    {
        $cred = $this->validate($request, [
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        

        //dd(Auth::attempt($cred));
 
        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
            return redirect('/')->withSuccess('Login Successful!');
        }else{
            return back()->with('logError', 'Login Failed, Please try again!');
        }  
     }

     public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
     }

     public function forgotPassPage(){
        return view('auth/forgotPass');
     }

     public function checkAcc(Request $request)
    {
        $cred = $this->validate($request, [
            'email' => 'required|email:dns',
            'phone' => 'required|numeric'
        ]);
 
        $user = User::where('email', $cred["email"])->where('phone', $cred["phone"])->get();

        if($user->count() > 0){           
            return view('auth/resetPass', compact('user'));
        }else {
            return back()->with('checkError', 'Account is not found!');
        }  
     }

     public function resetPass(Request $request){
        //dd($request);
        $val = $request->validate([
            'password' => 'required',
            'confirm_password' => 'required'
        ]);
        
        $userId = $request->id;
        $userUpdt = User::findorfail($userId);
        $val['password'] = Hash::make($val['password']);
        $userUpdt->update($val);
        return redirect("/login")->with('success', 'New password has set successfully');
     }
}
