<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Handle static pages
class PageController extends Controller
{
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
