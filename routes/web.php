<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 
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