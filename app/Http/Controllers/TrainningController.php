<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainningController extends Controller
{
    public function badges()
    {
        return view('trainning.badges');
    }
}
