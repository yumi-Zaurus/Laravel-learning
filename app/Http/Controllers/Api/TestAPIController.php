<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestAPIController extends Controller
{
   public function index()
   {
      $response = [
         'username' => 'tanaka',
         'age' => 30,
         'image' => 'https://randomuser.me/api/portraits/women/34.jpg',
         'self_introduction' => 'よろしくお願いします！'
      ];
		   return $response;
   }
}
