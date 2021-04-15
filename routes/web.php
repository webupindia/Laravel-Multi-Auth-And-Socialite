<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('admin/home', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::get('admin/editor', [App\Http\Controllers\Admin\EditorController::class, 'index']);
Route::get('admin/test', [App\Http\Controllers\Admin\EditorController::class, 'test']);
Route::get('admin', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])
       ->name('admin.login');
Route::post('admin', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin.login');
Route::post('admin-password/email',
	   [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])
       ->name('admin.password.email');
Route::get('admin-password/reset',
	   [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])
       ->name('admin.password.request');
Route::post('admin-password/reset', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'reset'])->name('admin.password.update');
Route::get('admin-password/reset/{token}',
	   [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'showResetForm'])
       ->name('admin.password.reset');

Route::get('verifyEmailFirst',
	   [App\Http\Controllers\Auth\RegisterController::class, 'verifyEmailFirst'])
       ->name('verifyEmailFirst'); 
Route::get('verify/{email}/{verifyToken}',
	   [App\Http\Controllers\Auth\RegisterController::class, 'sendEmailDone'])
       ->name('sendEmailDone');              
