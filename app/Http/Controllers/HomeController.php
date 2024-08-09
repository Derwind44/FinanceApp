<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard', ['active' => 'dashboard']);
    }

    public function expense()
    {
        return view('pages.expense', ['active' => 'expense']);
    }

    public function report()
    {
        return view('pages.report', ['active' => 'report']);
    }
}
