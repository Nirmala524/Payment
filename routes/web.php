<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

  
// Route::controller(PaymentController::class)->group(function(){
//     Route::get('stripe', 'stripe');
//     Route::post('stripe', 'stripePost')->name('stripe.post');
// });

Route::get('stripe',[PaymentController::class,'stripe']);
Route::post('payment',[PaymentController::class,'stripePost']);

