<?php

namespace App\Http\Controllers\psychologist_features;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Appointment;

class PsychologistController extends Controller
{
    public function index(){
        return view('psychologist-features/index');
    }

    public function profile(){
        return view('psychologist-features/psycProfile');
    }

    public function checkAppSchedule(){
        $user = auth()->user()->id;
        $appGet = Appointment::with('patient')->where('user_id_psychologist', $user)->get();

        if($appGet->count() < 1){
            return back()->with('warning', "There is no appointment for you!");
        }else{
            $app = Appointment::with('patient')->where('user_id_psychologist', $user)->paginate(3);
            return view('psychologist-features/appointmentSchedule', compact('app'));
        }
    }

    public function confirmApp($id){
        //dd($request);
        
        $appId = $id;
        $appStatUpd = Appointment::findorfail($appId);
        $appStatUpd->update(['appointmentStatus' => 'Confirmed']);
        
        return back()->with('success', 'Appointment status updated Successfully');
    }

    public function rejectApp($id){
        //dd($request);
        
        $appId = $id;
        $appStatUpd = Appointment::findorfail($appId);
        $appStatUpd->update(['appointmentStatus' => 'Rejected']);
        
        return back()->with('success', 'Appointment status updated Successfully');
    }

    public function scheduleFilter(Request $request){
        //dd($request);
        $appStatus = $request->status;
        $appDate = $request->date;
        $user = auth()->user()->id;

        if($appStatus !== "null" && $appDate !== null){
            $appGet = Appointment::with('patient')->where('user_id_psychologist', $user)->where('appointmentStatus', $appStatus)->where('appointmentDate', $appDate)->get();
            $app = Appointment::with('patient')->where('user_id_psychologist', $user)->where('appointmentStatus', $appStatus)->where('appointmentDate', $appDate)->paginate(3);

            if($appGet->count() > 0){
                return view('psychologist-features/appointmentSchedule', compact('app'));
            }else {
                return redirect("/psychologist-schedule")->with('error', 'The filtered data is not found');
            }
        }else if($appStatus !== "null" && $appDate === null){
            $appGet = Appointment::with('patient')->where('user_id_psychologist', $user)->where('appointmentStatus', $appStatus)->get();
            $app = Appointment::with('patient')->where('user_id_psychologist', $user)->where('appointmentStatus', $appStatus)->paginate(3);

            if($appGet->count() > 0){
                return view('psychologist-features/appointmentSchedule', compact('app'));
            }else {
                return redirect("/psychologist-schedule")->with('error', 'The filtered data with the specific status is not found');
            }
        }else if($appStatus === "null" && $appDate !== null){
            $appGet = Appointment::with('patient')->where('user_id_psychologist', $user)->where('appointmentDate', $appDate)->get();
            $app = Appointment::with('patient')->where('user_id_psychologist', $user)->where('appointmentDate', $appDate)->paginate(3);

            if($appGet->count() > 0){
                return view('psychologist-features/appointmentSchedule', compact('app'));
            }else {
                return redirect("/psychologist-schedule")->with('error', 'The filtered data with the specific date is not found');
            }
        }else{
            return redirect("/psychologist-schedule");
        }
        
    }

}
