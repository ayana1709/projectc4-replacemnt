<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AuthController extends Controller{


    public function  index(Request $request){
        // echo "s";
        // die();
    return view('login');

    }
    public function  forgot_password(Request $request){
       return view('forgot_password');
    } 
    public function register(Request $request){
        return view('register');
    }

}

?>