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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/News & Announcement', function () {
    return view('News & Announcement');
});

Route::get('/Reviews & Testimonials', function () {
    return view('Reviews & Testimonials');
});

Route::get('/Our Team', function () {
    return view('Our Team');
});

Route::get('/Mission', function () {
    return view('Mission');
});

Route::get('/Vision', function () {
    return view('Vision');
});

Route::get('/Programs Features', function () {
    return view('Programs Features');
});

Route::get('/Programs', function () {
    return view('Programs');
});

Route::get('/Programs Features item', function () {
    return view('Programs Features item');
});

Route::get('/Programs item', function () {
    return view('Programs item');
});

Route::get('/Signup', function () {
    return view('Signup');
});

Route::get('/subscribe', function () {
    return view('subscribe');
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

Route::post('/deleteItem/{id}', [itemController::class, 'deleteItem'])->name('itemRecords.deleteItem');

Route::get('payment', function(Request $request){
    return view('payment');
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
