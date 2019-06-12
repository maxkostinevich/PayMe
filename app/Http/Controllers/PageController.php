<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Handle static pages
class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('home');
    }

    // Homepage
    public function home()
    {
        return view('pages.home');
    }

    // Terms
    public function terms()
    {
        return view('pages.terms');
    }

    // Privacy
    public function privacy()
    {
        return view('pages.privacy');
    }
}
