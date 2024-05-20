<?php


namespace App\Http\Controllers\backend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 



// use Elementor\App\Http\Controllers\Controller;
class JobsController extends Controller{

    public function index(Request $request){
        // $data['getRecord'] = User::getRecord();
        return view('backend.jobs.list'); 


    } 
}
