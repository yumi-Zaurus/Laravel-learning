<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;



class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();

        return view('staff')->with('staffs', $staffs);
    }
    public function add()
    {
        return view('staff-add');
    }
}
