<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
      public function index()
    {
        //
        return view('layouts/home');
    }


    public function events()
    {
        //
    return view('layouts/events');
    }


    public function contacts()
    {
        //
        return view('layouts/contacts');
    }


    public function review()
    {
        //
        return view('layouts/review');
    }


}
