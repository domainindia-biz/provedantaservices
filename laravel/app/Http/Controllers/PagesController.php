<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function logodesign()
    {
        return view('logodesign');
    }

    public function webdesign()
    {
        return view('webdesign');
    }

    public function digitalmarketing()
    {
        return view('digitalmarketing');
    }

    public function ecommerce()
    {
        return view('ecommerce');
    }

    public function webapp()
    {
        return view('webapp');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contact()
    {
        return view('contact');
    }
}
