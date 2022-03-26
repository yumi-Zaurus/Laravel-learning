<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationApiController extends Controller
{
   public function index()
   {
      $response = Notification::getNotifications();
		return $response;
   }
}