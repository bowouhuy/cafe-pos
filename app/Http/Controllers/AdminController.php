<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
// use AuthenticatesUsers;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        if (Auth::user()->name =='admin'){
            return view('welcome');
         }else{
             echo "hellow";
         }
    }
}
