<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AppoitmentController extends Controller
{
    public function calendar()
    {
        return view('appoitment-calendar');
    }
}
