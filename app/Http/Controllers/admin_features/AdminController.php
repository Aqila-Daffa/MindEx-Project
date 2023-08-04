<?php

namespace App\Http\Controllers\admin_features;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\MentalHealth;
use App\Models\Appointment;
use App\Models\Payment;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // *** Dashboard ***
    public function index(){
        return view('admin/index');
    }

    // *** User ***
    public function userTable(){
        $user = User::latest()->paginate(5);

        return view('admin/userlist', compact('user'));
    }

    public function userSearch(Request $request){
        $userSearch = $request->search;
        $user = User::where('id', $userSearch)
                          ->orWhere('role', $userSearch)
                          ->orWhere("username", "like", '%' . $userSearch . '%')
                          ->orWhere("fullname", "like", '%' . $userSearch . '%')
                          ->orWhere("email", "like", '%' . $userSearch . '%')->latest()->paginate(5);

        if($user->count() > 0){
            return view('admin/userlist', compact('user'));
        }else {
            $user = User::latest()->paginate(5);
            return view('admin/userlist', compact('user'));
        }
    }

    public function addPsyc(){
        return view('admin/addPsyc');
    }

    public function addAdmin(){
        return view('admin/addAdmin');
    }

    public function createPsycho(Request $request)
    {
        //dd($request);
        $val = $request->validate([
            'username' => 'required|min:3|max:100|unique:users',
            'fullname' => 'required|min:3|max:100',
            'email' => 'required|email:dns|unique:users',
            'ic' => 'required|min:3|max:100',
            'address' => 'required|min:3|max:250',
            'phone' => 'required|numeric',
            'birthdate' => 'required|min:3|max:100',
            'password' => 'required|min:6|max:255',
            'role' => 'required',
        ]);
        
        $val['password'] = Hash::make($val['password']);
        User::create($val);
        return redirect("/admin-user-list")->with('success', 'Psychologist Account Created Successfully');
    }

    public function createAdmin(Request $request)
    {
        $val = $request->validate([
            'username' => 'required|min:3|max:100|unique:users',
            'fullname' => 'required|min:3|max:100',
            'email' => 'required|email:dns|unique:users',
            'ic' => 'required|min:3|max:100',
            'address' => 'required|min:3|max:250',
            'phone' => 'required|numeric',
            'birthdate' => 'required|min:3|max:100',
            'password' => 'required|min:6|max:255',
            'role' => 'required',
        ]);
        
        $val['password'] = Hash::make($val['password']);
        User::create($val);
        return redirect("/admin-user-list")->with('success', 'Admin Account Created Successfully');
    }

    public function deleteUser($id){
        //dd($id);
        $userId = $id;
        $user = User::findorfail($userId);
        $appId = [];
        
        $app = Appointment::where('user_id_patient', $userId)->orWhere('user_id_psychologist', $userId)->get();

        foreach($app as $apps){
            array_push($appId, $apps->id);
        }
        
        $payment = Payment::where('appointment_id', $appId)->get();
        $payment->each->delete();
        $app->each->delete();

        $mentalH = MentalHealth::where('user_id', $userId)->get();
        if ($mentalH->count() > 0) {
            $mentalH->each->delete();
        }

        $user->delete();
        return redirect("/admin-user-list")->with('success', 'User was deleted!');
    }

    // *** Mental Health Test ***
    public function mhTable(){
        $mh = MentalHealth::latest()->paginate(5);
        return view('admin/mentalHealthList', compact('mh'));
    }

    public function mhSearch(Request $request){
        $usID = $request->search;
        $mh = MentalHealth::where('user_id', $usID)->latest()->paginate(5);

        if($mh->count() > 0){
            return view('admin/mentalHealthList', compact('mh'));
        }else {
            $mh = MentalHealth::latest()->paginate(5);
            return view('admin/mentalHealthList', compact('mh'));
        }
    }

    // *** Appointment ***
    public function appTable(){
        $app = Appointment::latest()->paginate(5);
        return view('admin/appointmentList', compact('app'));
    }

    public function appSearch(Request $request){
        $search = $request->search;
        $app = Appointment::where('id', $search)
                                ->orWhere('appointmentDate', $search)
                                ->orWhere('appointmentStatus', $search)->latest()->paginate(5);

        if($app->count() > 0){
            return view('admin/appointmentList', compact('app'));
        }else {
            $app = Appointment::latest()->paginate(5);
            return view('admin/appointmentList', compact('app'));
        }
    }

    public function editLink($id){
        $app = $id;
        $appointment = Appointment::where('id', $app)->get();
        return view('admin/addLink', compact('appointment'));
    }

    public function updateLink(Request $request){
        //dd($request);
        $val = $request->validate([
            'appointmentStatus' => 'required',
            'meetingLink' => 'required',
        ]);

        if($val['appointmentStatus'] == "Pending" && $val['meetingLink'] != "-" || $val['appointmentStatus'] == "Payment Rejected" && $val['meetingLink'] != "-"){
            return back()->with('Error', 'Change The Appointment Status if want to give the link');
        }else{
            $appId = $request->id;
            $appUpdt = Appointment::findorfail($appId);
            $appUpdt->update($val);
            return redirect("/admin-appointment-list")->with('success', 'Data Updated Successfully');
        }
    }

    // *** Payment ***
    public function transTable(){
        $trans = Payment::latest()->paginate(5);
        return view('admin/paymentList', compact('trans'));
    }

    public function deletePayment($id){
        //dd($id);
        $payID = $id;
        $trans = Payment::findorfail($payID);

        $transImg = public_path("paymentProof/".$trans->paymentLink);
        if(file_exists($transImg)){
            unlink($transImg);
        }

        $trans->delete();
        return back()->with('success', 'Transaction record was deleted!');
    }

    public function tranSearch(Request $request){
        $search = $request->search;
        $trans = Payment::where('appointment_id', $search)
                        ->orWhere('paymentDate', $search)
                        ->orWhere('paymentStatus', $search)->latest()->paginate(5);

        if($trans->count() > 0){
            return view('admin/paymentList', compact('trans'));
        }else {
            $trans = Payment::latest()->paginate(5);
            return view('admin/paymentList', compact('trans'));
        }
    }

    public function editLinkPay($id){
        $payID = $id;
        $trans = Payment::with('appointment')->where('id', $payID)->get();
        return view('admin/addTransLink', compact('trans'));
    }

    public function updateLinkPay(Request $request){
        //dd($request);
        
        $val = $request->validate([
            'paymentStatus' => 'required',
        ]);

        $payID = $request->id;
        $transUpdt = Payment::findorfail($payID);
        $transUpdt->update($val);
        return redirect("/admin-transaction-list")->with('success', 'Data Updated Successfully');
    }
}
