<?php 

use Illuminate\Support\Facades\Route ;
use MekadAlibrahem\Uiauthpackage\Http\Controllers\LoginController;

Route::view('/login' , 'auth.login')->name('login_view');
Route::get('/login_handler' , [LoginController::class , 'login_handler'])->name('login_handler');
Route::view('/home' , 'user.home')->name('user.home');

