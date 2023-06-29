<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Appointment;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $patient = 0;
        $psychologist = 0;
        $appointment = 0;
        
        $pat = User::where('role', 'Patient')->get();
        $psy = User::where('role', 'Psychologist')->get();
        $app = Appointment::where('appointmentStatus', 'Payment Approved')->get();

        foreach($app as $apps){
            $appointment += 1;
        }

        foreach($pat as $patients){
            $patient += 1;
        }

        foreach($psy as $psychologists){
            $psychologist += 1;
        }
        
        return view('index', ["appointment" => $appointment, "patient" => $patient, "psychologist" => $psychologist]);
    }
}
