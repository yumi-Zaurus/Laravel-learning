<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;



class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        var_dump($patients);

        // return ('patient')->with('patients', $patients);
    }
}