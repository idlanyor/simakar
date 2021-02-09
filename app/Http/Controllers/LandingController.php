<?php

namespace App\Http\Controllers;


class LandingController extends Controller
{
    public function welcome()
    {
        return view('landing');
    }
}
