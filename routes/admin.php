<?php

use Illuminate\Support\Facades\Route;
/*==============Admin Auth Route=========*/
Route::get('admin/home', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::get('admin/editor', [App\Http\Controllers\Admin\EditorController::class, 'index']);
Route::get('admin/test', [App\Http\Controllers\Admin\EditorController::class, 'test']);
Route::get('admin', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin.login');
Route::post('admin-password/email',[App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
Route::get('admin-password/reset',[App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
Route::post('admin-password/reset', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'reset'])->name('admin.password.update');
Route::get('admin-password/reset/{token}',[App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
Route::post('admin-logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');
/*==================Admin Auth End======================*/