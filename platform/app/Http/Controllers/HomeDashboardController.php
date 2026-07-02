<?php

namespace App\Http\Controllers;

class HomeDashboardController extends Controller
{
    public function show()
    {
        return view('home.dashboard');
    }
}