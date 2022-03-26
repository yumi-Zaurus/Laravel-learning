<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use SoftDeletes;

    /**
     * nortificationテーブル - importanceカラム
     */
    const IMPORTANCE_DEFAULT = 1; // デフォルト
    const IMPORTANCE_MEDIUM = 2; // 重要度中
    const IMPORTANCE_HIGH = 3; // 重要度高

    /**
     * 公開されているNotificationを取得する
     * return array
     */
    static function getNotifications()
    {
        $notifications = Notification::where('is_open', 1)->get();
        $notification_data = [];
        foreach($notifications as $notification) {
            $notification_data[] = [
                "id" => $notification['id'],
                "title" => $notification['title'],
                "content" => $notification['contents'],
                "date" => date('Y-m-d H:i', strtotime($notification['delivered_at'])),
            ];
        }
        return $notification_data;
    }

}