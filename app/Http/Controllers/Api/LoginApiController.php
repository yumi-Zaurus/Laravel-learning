<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PatientAuth;

class LoginApiController extends Controller
{
   public function index(Request $request)
   {
      $login_id = $request->input('login_id');
      $password = $request->input('password');

      $patient_auth = PatientAuth::where([
         'login_id' => $login_id,
         'password' => $password
      ])->first();

      // token発行
      $token = uniqid(bin2hex(random_bytes(10)));

      // token保存
      $patient_auth->token = $token;
      $patient_auth->save();

      return [
         'patient_id' => $patient_auth->patient_id,
         'token' => $token
      ];
   }
}
