<?php

namespace App\Http\Controllers\patient_features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MentalHealth;

class MentalHealthController extends Controller
{
    public function index(){
        //$mh = auth()->user()->id;

        // create new record or row if it doesn't exist yet
        // MentalHealth::firstOrCreate(
        //     [ 'user_id' => $mh ]
        // );
        return view('patient-features/mental-health-test/mhindex');
    }

    public function mhtest(){
        return view('patient-features/mental-health-test/mhtest');
    }

    public function result(){
        //dd($answer);

        // Depression Result
        $depression = array((int)$_POST["q3"], (int)$_POST["q5"], (int)$_POST["q10"], (int)$_POST["q13"], (int)$_POST["q16"], (int)$_POST["q17"], (int)$_POST["q21"], (int)$_POST["q24"], 
        (int)$_POST["q26"], (int)$_POST["q31"], (int)$_POST["q34"], (int)$_POST["q37"], (int)$_POST["q38"], (int)$_POST["q42"]);
    
        $depScore = array_sum($depression);
        $depResult = "";

        if($depScore >= 0 && $depScore < 10){
            $depResult .= "Normal";
        }else if($depScore >= 10 && $depScore < 13){
            $depResult .= "Mild";
        }else if($depScore >= 13 && $depScore < 21){
            $depResult .= "Moderate";
        }else if($depScore >= 21 && $depScore < 28){
            $depResult .= "Severe";
        }else if($depScore >= 28 && $depScore < 43){
            $depResult .= "Extremely Severe";
        }
        // End Depression Result

        // Anxiety Result
        $anxiety = array((int)$_POST["q2"], (int)$_POST["q4"], (int)$_POST["q7"], (int)$_POST["q9"], (int)$_POST["q15"], (int)$_POST["q19"], (int)$_POST["q20"], 
        (int)$_POST["q23"], (int)$_POST["q25"], (int)$_POST["q28"], (int)$_POST["q30"], (int)$_POST["q36"], (int)$_POST["q40"], (int)$_POST["q41"]);
    
        $anxScore = array_sum($anxiety);
        $anxResult = "";

        if($anxScore >= 0 && $anxScore < 7){
            $anxResult .= "Normal";
        }else if($anxScore >= 7 && $anxScore < 10){
            $anxResult .= "Mild";
        }else if($anxScore >= 10 && $anxScore < 15){
            $anxResult .= "Moderate";
        }else if($anxScore >= 15 && $anxScore < 20){
            $anxResult .= "Severe";
        }else if($anxScore >= 20 && $anxScore < 43){
            $anxResult .= "Extremely Severe";
        }
        // End Anxiety Result

        // Stress Result
        $stress = array((int)$_POST["q1"], (int)$_POST["q6"], (int)$_POST["q8"], (int)$_POST["q11"], (int)$_POST["q12"], (int)$_POST["q14"], (int)$_POST["q18"], 
        (int)$_POST["q22"], (int)$_POST["q27"], (int)$_POST["q29"], (int)$_POST["q32"], (int)$_POST["q33"], (int)$_POST["q35"], (int)$_POST["q39"]);
    
        $strScore = array_sum($stress);
        $strResult = "";

        if($strScore >= 0 && $strScore < 11){
            $strResult .= "Normal";
        }else if($strScore >= 11 && $strScore < 19){
            $strResult .= "Mild";
        }else if($strScore >= 19 && $strScore < 27){
            $strResult .= "Moderate";
        }else if($strScore >= 27 && $strScore < 35){
            $strResult .= "Severe";
        }else if($strScore >= 35 && $strScore < 43){
            $strResult .= "Extremely Severe";
        }
        // End Stress Result

        $mhId = auth()->user()->id;
        $mh = MentalHealth::where('user_id', $mhId);
        //$mh = MentalHealth::where('user_id', $mhId)->first();

        if($mh->count() === 3){
            $mh->first();
            $mh->delete();

            MentalHealth::create([
                'user_id' => $mhId,
                'depScore' => $depScore,
                'depResult' => $depResult,
                'anxScore' => $anxScore,
                'anxResult' => $anxResult,
                'strScore' => $strScore,
                'strResult' => $strResult
            ]);
            // MentalHealth::where('user_id', $mhId)->first()->update([
            //     'depScore' => $depScore,
            //     'depResult' => $depResult,
            //     'anxScore' => $anxScore,
            //     'anxResult' => $anxResult,
            //     'strScore' => $strScore,
            //     'strResult' => $strResult
            // ]);
        }else if($mh->count() < 3){
            MentalHealth::create([
                'user_id' => $mhId,
                'depScore' => $depScore,
                'depResult' => $depResult,
                'anxScore' => $anxScore,
                'anxResult' => $anxResult,
                'strScore' => $strScore,
                'strResult' => $strResult
            ]);
        }
        return view('patient-features/mental-health-test/mhresult', ['dScore' => $depScore, 'dResult' => $depResult, 'aScore' => $anxScore, 'aResult' => $anxResult, 'sScore' => $strScore, 'sResult' => $strResult]);                           
    }

    public function mhstatus(){

        $mhId = auth()->user()->id;
        $mh = MentalHealth::where('user_id', $mhId)->get();
        //dd($mh);

        return view('patient-features/mental-health-test/mhstatus', compact('mh'));
    }
}

