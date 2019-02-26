<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // main page
    public function index()
    {
        return view('index');
    }

    // contact page
    public function contact()
    {
        return view('pages.contact');
    }
}
