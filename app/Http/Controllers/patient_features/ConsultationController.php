<?php

namespace App\Http\Controllers\patient_features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Appointment;

class ConsultationController extends Controller
{
    public function index(){
        return view('patient-features/consultation/consultindex');
    }

    public function appHistory(){
        $user = auth()->user()->id;
        $appGet = Appointment::with('psychologist')->where('user_id_patient', $user)->get();

        if($appGet->count() < 1){
            return back()->with('warning', "You haven't made an appointment yet!");
        }else{
            $app = Appointment::with('psychologist')->where('user_id_patient', $user)->paginate(3);
            return view('patient-features/consultation/appointmentHistory', compact('app'));
        }
    }

    public function appHistoryFilter(Request $request){
        //dd($request);
        $appStatus = $request->status;
        $appDate = $request->date;
        $user = auth()->user()->id;

        if($appStatus !== "null" && $appDate !== null){
            $appGet = Appointment::with('psychologist')->where('user_id_patient', $user)->where('appointmentStatus', $appStatus)->where('appointmentDate', $appDate)->get();
            $app = Appointment::with('psychologist')->where('user_id_patient', $user)->where('appointmentStatus', $appStatus)->where('appointmentDate', $appDate)->paginate(3);

            if($appGet->count() > 0){
                return view('patient-features/consultation/appointmentHistory', compact('app'));
            }else {
                return redirect("/appointment-history")->with('error', 'The filtered data is not found');
            }
        }else if($appStatus !== "null" && $appDate === null){
            $appGet = Appointment::with('psychologist')->where('user_id_patient', $user)->where('appointmentStatus', $appStatus)->get();
            $app = Appointment::with('psychologist')->where('user_id_patient', $user)->where('appointmentStatus', $appStatus)->paginate(3);

            if($appGet->count() > 0){
                return view('patient-features/consultation/appointmentHistory', compact('app'));
            }else {
                return redirect("/appointment-history")->with('error', 'The filtered data with the specific status is not found');
            }
        }else if($appStatus === "null" && $appDate !== null){
            $appGet = Appointment::with('psychologist')->where('user_id_patient', $user)->where('appointmentDate', $appDate)->get();
            $app = Appointment::with('psychologist')->where('user_id_patient', $user)->where('appointmentDate', $appDate)->paginate(3);

            if($appGet->count() > 0){
                return view('patient-features/consultation/appointmentHistory', compact('app'));
            }else {
                return redirect("/appointment-history")->with('error', 'The filtered data with the specific date is not found');
            }
        }else{
            return redirect("/appointment-history");
        }   
    }

    public function deleteAppointment($id){
        //dd($id);
        $appID = $id;
        $appointment = Appointment::findorfail($appID);
      
        $appointment->delete();
        return redirect("/appointment-history")->with('success', 'Appointment was deleted!');
    }

    public function appointment(){
        $fname = auth()->user()->fullname;
        $bdate = auth()->user()->birthdate;
        $adress = auth()->user()->adress;
        $phone = auth()->user()->phone;

        $psychologist = User::where('role', 'Psychologist')->get();

        if($fname == null || $bdate = null || $adress = null || $phone = null){
            return redirect("/profile")->with('warning', 'Please complete your profile first!');
        }else{
            return view('patient-features/consultation/psylist', compact('psychologist'));
        }
        
    }

    public function psyDetails(){
        $pName = $_GET["name"];
        $pDetail = User::where('fullname', $pName)->get();
        return view('patient-features/consultation/psyDetails', compact('pDetail'));
    }

    public function consultation(){
        return view('patient-features/consultation/consult');
    }

    public function book(Request $request)
    {
        //dd($request);
        $val = $request->validate([
            'appointmentDate' => 'required',
            'appointmentSection' => 'required',
            'appointmentStatus' => 'required',
            'meetingLink' => 'required',
            'user_id_patient' => 'required',
            'user_id_psychologist' => 'required',
        ]);
        
        Appointment::create($val);
        return redirect("/appointment-history")->with('success', 'Appointment Booked Successfully');
    }

}
