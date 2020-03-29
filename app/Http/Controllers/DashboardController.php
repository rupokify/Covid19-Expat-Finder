<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showProfile()
    {
        return view('profile');
    }

    public function showVerification()
    {
        return view('verification');
    }

    public function showReports()
    {
        return view('reports');
    }
}
