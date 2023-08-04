<?php

namespace App\Http\Controllers\patient_features;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        return view('patient-features/profile');
    }

    public function updPrflPage(){
        return view('patient-features/update-profile');
    }

    public function update(Request $request)
    {
        //dd($request);
        $val = $request->validate([
            'fullname' => 'required|min:3|max:100',
            'address' => 'required|min:3|max:250',
            'phone' => 'required|numeric',
            'birthdate' => 'required|min:3|max:100',
        ]);
        
        $userId = auth()->user()->id;
        $userUpdt = User::findorfail($userId);
        $userUpdt->update($val);
        return redirect("/profile")->with('success', 'Data Updated Successfully');
    }
}
