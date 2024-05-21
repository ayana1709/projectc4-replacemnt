<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\backend\DashboardController; 
use App\Http\Controllers\backend\EmployeesController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\backend\JobsController;

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


    Route::get('admin/employees',[EmployeesController::class, 'index']);
    
    Route::get('admin/employees/add',[EmployeesController::class, 'add']);
    Route::post('admin/employees/add',[EmployeesController::class, 'add_post']);
    Route::get('admin/employees/view/{id}',[EmployeesController::class, 'view']);
    Route::get('admin/employees/edit/{id}',[EmployeesController::class, 'edit']);
    Route::post('admin/employees/edit/{id}',[EmployeesController::class, 'edit_update']);
    Route::get('admin/employees/delete/{id}',[EmployeesController::class, 'delete']);

// Job Start 
Route::get('admin/jobs',[JobsController::class,'index']);
Route::get('admin/jobs',[JobsController::class,'index']);
Route::get('admin/jobs/add', [JobsController::class, 'add']);
Route::post('admin/jobs/add', [JobsController::class, 'add_post']);
Route::get('admin/jobs/view/{id}', [JobsController::class, 'view']);
Route::get('admin/jobs/edit/{id}',[JobsController::class, 'edit' ] );
Route::post('admin/jobs/edit/{id}', [JobsController::class, 'edit_update' ] ); 
  
} );   





Route::get('logout',[AuthController::class, 'logout']);