<?php


namespace App\Http\Controllers\backend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;



// use Elementor\App\Http\Controllers\Controller;
class DashboardController extends Controller{

    public function dashboard(Request $request){
        return view('backend.dashboard.list');


    }



}



?>