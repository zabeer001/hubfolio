<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function landingPage()
    {
      
        return view('layouts.frontend.master');
    }
}
