<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/*============User Auth============*/
Auth::routes();
Route::get('verifyEmailFirst',[App\Http\Controllers\Auth\RegisterController::class, 'verifyEmailFirst'])->name('verifyEmailFirst'); 
Route::get('verify/{email}/{verifyToken}',[App\Http\Controllers\Auth\RegisterController::class, 'sendEmailDone'])->name('sendEmailDone');   
/*=========User Auth End===========*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');                                                                                                    




   
