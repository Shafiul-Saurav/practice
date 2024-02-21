<?php

namespace App\Http\Controllers\Frondend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $pageName = 'Home Page';
        return view('home', compact('pageName'));
    }
    public function about()
    {
        $pageName = 'About Page';
        return view('pages.about', compact('pageName'));
    }
    public function service()
    {
        $pageName = 'Service Page';
        return view('pages.service', compact('pageName'));
    }
    public function contact()
    {
        $pageName = 'Contact Page';
        return view('pages.contact', compact('pageName'));
    }
}
