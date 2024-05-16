<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\backend\DashboardController; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AuthController::class, 'index']);
Route::get('forgot-password',[Authcontroller::class, 'forgot_password']);
Route::get('register', [AuthController::class, 'register']);
Route::post('registe_post',[AuthController::class, 'registe_post']);
Route::post('checkemail',[AuthController::class, 'CheackEmail']);  
Route::post('login_post', [AuthController::class, 'login_post']);  


//Admin || Hr same name 
Route::group(['middleware'=>'admin'], function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
} );   

Route::get('logout',[AuthController::class, 'logout']);