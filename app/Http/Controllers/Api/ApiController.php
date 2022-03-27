<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientAuth;
use Exception;

class ApiController extends Controller
{
   function __construct(Request $request)
   {
      $this->tokenCheck($request);
   }

   function tokenCheck($request)
   {
      $token = $request->input('token');
      $patient_auth = PatientAuth::where('token', $token)
         ->where('expired_at' , '>', date('Y-m-d h:m:i'))
         ->first();

      // TODO: patient_idを共通に格納する？
      if (!$patient_auth) {
         // TODO: 認証失敗処理
         exit;
      }
   }
}
