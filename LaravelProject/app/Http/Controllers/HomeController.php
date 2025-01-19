<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //THis method will show our home page
    public function index(){
       return  view('front.home');
    }
}
