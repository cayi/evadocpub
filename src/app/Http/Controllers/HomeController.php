<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user()->perfil == "A") 
        {  
           //dd("Home Admin");
           return view('homeadmin');
        }
        else
        {
            return view('home');
        }      
    }
}