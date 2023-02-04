<?php

use App\Http\Controllers\Frontend\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('frontend.index');

// Authentication Routes Frontend...
Route::get('/login', [Frontend\Auth\LoginController::class, 'showLoginForm'])->name('frontend.show_login_form');
Route::post('login', [Frontend\Auth\LoginController::class, 'login'])->name('frontend.login');
Route::post('logout', [Frontend\Auth\LoginController::class, 'logout'])->name('frontend.logout');
Route::get('register', [Frontend\Auth\RegisterController::class, 'showRegistrationForm'])->name('frontend.show_register_form');
Route::post('register', [Frontend\Auth\RegisterController::class, 'register'])->name('frontend.register');
Route::get('password/reset', [Frontend\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [Frontend\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.request');
Route::get('password/reset/{token}', [Frontend\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.email');
Route::post('password/reset', [Frontend\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('email/verify', [Frontend\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [Frontend\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [Frontend\Auth\VerificationController::class, 'resend'])->name('verification.resend');







/* Admin routes */
Route::group(['prefix' => 'admin'], function () {

    // Authentication Routes Admin..
    Route::get('/login', [Backend\Auth\LoginController::class, 'showLoginForm'])->name('admin.show_login_form');
    Route::post('login', [Backend\Auth\LoginController::class, 'login'])->name('admin.login');
    Route::post('logout', [Backend\Auth\LoginController::class, 'logout'])->name('admin.logout');
    Route::get('password/reset', [Backend\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::post('password/email', [Backend\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('password/reset/{token}', [Backend\Auth\ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
    Route::post('password/reset', [Backend\Auth\ResetPasswordController::class, 'reset'])->name('admin.password.update');

});



Route::get('/{post}',     [IndexController::class, 'post_show'])->name('frontend.posts.show');
Route::post('/{post}',    [IndexController::class, 'store_comment'])->name('frontend.posts.add_comment');
