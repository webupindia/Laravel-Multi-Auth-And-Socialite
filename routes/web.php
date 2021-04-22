<?php
use Laravel\Socialite\Facades\Socialite;
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
/*=========Socialite===========*/      
//Google Login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');      
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);                                                                                    
//Facebook Login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');      
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);     

//Github Login
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');      
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);     



   
