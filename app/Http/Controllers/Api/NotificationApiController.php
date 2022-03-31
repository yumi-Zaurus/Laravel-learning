<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\NotificationRead;

class NotificationApiController extends ApiController
{
   /**
    * お知らせを取得する
    */
   public function list(Request $request)
   {
      $patient_id = $request->input('patient_id');
      $response = Notification::getOpenNotifications($patient_id);
		return $response;
   }

   /**
    * 既読情報をテーブルに追加
    */
   public function read(Request $request)
   {
      $patient_id = $request->input('patient_id');
      $notification_id = $request->input('notification_id');

      $notification_read = new NotificationRead();
      $notification_read->patient_id = $patient_id;
      $notification_read->notification_id = $notification_id;
      $notification_read->save();

      return [
         'result' => true
      ];
   }
}