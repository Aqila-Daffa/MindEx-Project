<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{

    public function index()
    {   
        $appId = $_GET["id"];
        $appointment = Appointment::with('psychologist')->where('id', $appId)->get();
        return view('patient-features/payment/payment', compact('appointment'));
    }

    public function paymentProof(Request $request)
    {
        //dd($request->file("paymentLink"));
        $file = $request->file("paymentLink");
        $nameFile = $file->getClientOriginalName();
        $uploadPay = new Payment;
        $uploadPay->paymentLink = $nameFile;
        $uploadPay->paymentDate = $request->paymentDate;
        $uploadPay->totalPrice = $request->totalPrice;
        $uploadPay->paymentStatus = $request->paymentStatus;
        $uploadPay->appointment_id = $request->appointment_id;

        $file->move(public_path().'/paymentProof', $nameFile);
        $uploadPay->save();

        $appId = $request->appointment_id;
        $appStatUpd = Appointment::findorfail($appId);
        $appStatUpd->update(['appointmentStatus' => 'Pending']);

        return redirect("/appointment-history")->with('success', 'Payment Successful');
    }

}
