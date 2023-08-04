<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_features\AdminController;
use App\Http\Controllers\psychologist_features\PsychologistController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\patient_features\ProfileController;
use App\Http\Controllers\patient_features\MentalHealthController;
use App\Http\Controllers\patient_features\ConsultationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ***** Landing Page *****

Route::get('/', [Controller::class, 'index']);

// *************************

// ***** Authentication Function *****

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/forget-password', [LoginController::class, 'forgotPassPage'])->middleware('guest');
Route::post('/checkAcc', [LoginController::class, 'checkAcc']);
Route::post('/resetPassword', [LoginController::class, 'resetPass']);
Route::post('/signin', [LoginController::class, 'loginAuth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/regist', [RegisterController::class, 'store']);

// ****************************************

// ***** User Feature *****

// ***** Profile Feature *****
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/update-profile', [ProfileController::class, 'updPrflPage'])->middleware('auth');
Route::post('/updateProfile', [ProfileController::class, 'update']);

// ***** Product Feature *****
Route::get('/cake-product', [ProductController::class, 'index'])->middleware('auth');
Route::get('/product-detail', [ProductController::class, 'prodDetail'])->middleware('auth');
Route::post('/mental-health-result', [MentalHealthController::class, 'result'])->middleware('auth');
Route::get('/mental-health-status', [MentalHealthController::class, 'mhstatus'])->middleware('auth');

// ***** Online Consultation Feature *****
Route::get('/consultation', [ConsultationController::class, 'index'])->middleware('auth');
Route::get('/appointment-history', [ConsultationController::class, 'appHistory'])->middleware('auth');
Route::post('/appointment-history-filter', [ConsultationController::class, 'appHistoryFilter'])->middleware('auth');
Route::get('/psychologist-detail', [ConsultationController::class, 'psyDetails'])->middleware('auth');
Route::get('/psychologist-list', [ConsultationController::class, 'appointment'])->middleware('auth');
Route::post('/book', [ConsultationController::class, 'book'])->middleware('auth'); 
Route::get('/consultation-time', [ConsultationController::class, 'consultation'])->middleware('auth');
Route::get('/deleteAppointment/{id}', [ConsultationController::class, 'deleteAppointment'])->middleware('auth');

// ***** Online Payment Feature *****
Route::get('/payment-page', [PaymentController::class, 'index'])->middleware('auth');
Route::post('/upload-payment-proof', [PaymentController::class, 'paymentProof'])->middleware('auth');

// *************************


// ***** ChatBot Feature *****
Route::get('/MindExBot-page', [ChatBotController::class, 'index'])->middleware('auth');
Route::match(['get', 'post'], 'botman', [ChatBotController::class, 'handle'])->middleware('auth');

// *************************


// ***** Admin Page *****

Route::get('/admin-dashboard', [AdminController::class, 'index'])->middleware('admin');

Route::get('/admin-user-list', [AdminController::class, 'userTable'])->middleware('admin');
Route::get('/admin-user-search', [AdminController::class, 'userSearch'])->middleware('admin');
Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->middleware('admin');

Route::get('/admin-mental-health-list', [AdminController::class, 'mhTable'])->middleware('admin');
Route::get('/admin-mental-health-search', [AdminController::class, 'mhSearch'])->middleware('admin');

Route::get('/admin-add-psychologist', [AdminController::class, 'addPsyc'])->middleware('admin');
Route::post('/createPsycho', [AdminController::class, 'createPsycho'])->middleware('admin');

Route::get('/admin-add-admin', [AdminController::class, 'addAdmin'])->middleware('admin');
Route::post('/createAdmin', [AdminController::class, 'createAdmin'])->middleware('admin');


Route::get('/edit-link/{id}', [AdminController::class, 'editLink'])->middleware('admin');
Route::get('/admin-appointment-list', [AdminController::class, 'appTable'])->middleware('admin');
Route::get('/admin-appointment-data', [AdminController::class, 'appSearch'])->middleware('admin');
Route::post('/updateLink', [AdminController::class, 'updateLink'])->middleware('admin');

Route::get('/edit-payment-link/{id}', [AdminController::class, 'editLinkPay'])->middleware('admin');
Route::get('/deletePayment/{id}', [AdminController::class, 'deletePayment'])->middleware('admin');
Route::get('/admin-transaction-list', [AdminController::class, 'transTable'])->middleware('admin');
Route::post('/update-payment-status', [AdminController::class, 'updateLinkPay'])->middleware('admin');
Route::get('/search-transaction-list', [AdminController::class, 'tranSearch'])->middleware('admin');

// *************************

// ***** Psychologist Page *****

Route::get('/psychologist-dashboard', [PsychologistController::class, 'index'])->middleware('psychologist');
Route::get('/psychologist-profile', [PsychologistController::class, 'profile'])->middleware('psychologist');
Route::get('/psychologist-schedule', [PsychologistController::class, 'checkAppSchedule'])->middleware('psychologist');
Route::post('/psychologist-schedule-filter', [PsychologistController::class, 'scheduleFilter'])->middleware('psychologist');
Route::get('/rejectApp/{id}', [PsychologistController::class, 'rejectApp'])->middleware('psychologist');
Route::get('/confirmApp/{id}', [PsychologistController::class, 'confirmApp'])->middleware('psychologist');

// *************************