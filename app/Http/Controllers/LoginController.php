<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $adminData = AdminUser::where('login_id', $username)
            ->where('password', $password)
            ->first();
        if (is_null($adminData)) {
            return redirect(route('login'));
        } else {
            return redirect(route('top'));
        }
    }
}