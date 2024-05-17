<?php


namespace App\Http\Controllers\backend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;



// use Elementor\App\Http\Controllers\Controller;
class EmployeesController extends Controller{

    public function index(Request $request){
        return view('backend.employees.list'); 


    } 

    public function  add(Request $request){
     return view('backend.employees.add');


    }


}

 

?>