<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        // dd('hi');
        return Inertia::render('Dashboard');
    }

}
