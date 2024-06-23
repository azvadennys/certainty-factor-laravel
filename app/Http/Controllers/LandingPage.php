<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

class LandingPage extends Controller
{
    public function index(){

        return view('page.index');
    }
}
