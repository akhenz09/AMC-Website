<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemController;
use App\Http\Controllers\userController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', function () {
    return view('/Landingpage/home');
});

Route::get('home', function () {
    return view('/Landingpage/home');
});

Route::get('/welcome', function () {
    return view('/Welcome/welcome');
});

Route::get('/brochure', function () {
    return view('/Welcome/brochure');
});

Route::get('/News & Announcement', function () {
    return view('/Frontend/News & Announcement');
});

Route::get('/Reviews & Testimonials', function () {
    return view('/Frontend/Reviews & Testimonials');
});

Route::get('/Our Team', function () {
    return view('/OurTeam/Our Team');
});

Route::get('/Mission', function () {
    return view('/Frontend/Mission');
});

Route::get('/Vision', function () {
    return view('/Frontend/Vision');
});

Route::get('/Programs Features', function () {
    return view('/Frontend/Programs Features');
});

Route::get('/Programs', function () {
    return view('/Programs/Programs');
});

Route::get('/Exam', function () {
    return view('/Programs/Exam');
});

Route::get('/paymentqr', function () {
    return view('/Enroll Now/paymentqr');
});

Route::get('/Programs Features item', function () {
    return view('/Dashboard/Programs Features item');
});

Route::get('/Programs item', function () {
    return view('/Dashboard/Programs item');
});

Route::get('/Signup', function () {
    return view('/Frontend/Signup');
});

Route::get('/subscribe', function () {
    return view('Enroll Now/subscribe');
});

Route::get('/Dashboard', function () {
    return view('/Dashboard/Dashboard');
});



Route::post('/acceptRegistration', [userController::class, 'saveRegistration'])->name('saveRegistration');

Route::post('/userAuthentication', [userController::class, 'userAuth'])->name('userAuth');

Route::get('/login', [userController::class, 'login'])->name('login');

Route::get('/logout', [userController::class, 'logout'])->name('logout');

Route::get('/items', [itemController::class, 'items'])->name('items');

Route::get('/addItem', [itemController::class, 'newItem'])->name('newItem');

Route::post('/registerItem', [itemController::class, 'saveItem'])->name('saveItem');

Route::get('/editItem/{id}', [itemController::class, 'editItem'])->name('itemRecords.editItem');

Route::post('/updateItem/{id}', [itemController::class, 'updateItem'])->name('itemRecords.updateItem');

Route::get('/deleteItem/{id}', [itemController::class, 'deleteItem'])->name('itemRecords.deleteItem');

Route::get('payment', function(Request $request){
    return view('Enroll Now/payment');
});


// Paymongo Routes
Route::controller(PaymentController::class)->group(function () {
    // PayMongo Webhooks
    // Attach a middleware to all web hooks to validate
    // that the request really came from PayMongo.
    Route::post('webhooks/source-chargeable', 'createGCashPayment')
         ->middleware('paymongo.signature:source_chargeable');

    Route::post('webhooks/payment-paid', 'handlePaymentReceived')
         ->middleware('paymongo.signature:payment_paid');

    Route::post('webhooks/payment-failed', 'handlePaymentFailed')
         ->middleware('paymongo.signature:payment_failed');
    //: PayMongo Webhooks

    // Card payment routes
    Route::post('process-card-payment', 'processCardPayment');
    Route::post('payment-response', 'responseHandler');
    //: Card payment routes
});
