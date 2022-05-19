<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('homepage');
    }
    public function scan(){
        return view ('scan');
    }
    public function report(){
        return view ('report');
    }
    public function issue(){
        return view ('issue');
    }
}
