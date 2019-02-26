<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // List portfolio (specialists)
    public function index()
    {
        return view('appointment.portfolio');
    }
    
    // Detail portfolio
    public function detail()
    {
        return view('appointment.detail');
    }
    
    // Detail booking
    public function booking()
    {
        return view('appointment.booking');
    }
    
    // Detail submit review
    public function submit_review()
    {
        return view('appointment.submit-review');
    }
    
    // Detail submit review
    public function consultation()
    {
        return view('appointment.consultation');
    }
    
    // Detail booking confirmed
    public function confirm()
    {
        return view('appointment.confirm');
    }
}
