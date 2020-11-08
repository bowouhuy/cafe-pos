<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        return view('home');
    }

    public function welcome(){
        return view('welcome');
    }

    public function halo($nama){
        return view('home', ['nama'=>$nama]);
        // var_dump($nama);
    }
}
