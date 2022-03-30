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
     * お知らせの既読情報を取得
     */
    public function notificationRead()
    {
        return $this->hasmany(NotificationRead::class);
    }

    /**
     * お知らせを取得する
     */
    static function getNotifications()
    {
        $notification = Notification::all();
        $notifications = [];
        foreach ($notification as $data) {
            $notifications[] = [
                "id" => $data['id'],
                "title" => $data['title'],
                "contents" => $data['contents'],
                "is_open" => $data['is_open'],
                "importance" => self::convertImportance($data),
                "delivered_at" => date('Y-m-d H:i', strtotime($data['delivered_at'])),
                "created_at" => date('Y-m-d H:i', strtotime($data['created_at'])),
                "updated_at" => date('Y-m-d H:i', strtotime($data['updated_at'])),
                "deleted_at" => $data['deleted_at'],
            ];
        }
        return $notifications;
    }

    /**
     * 公開されているお知らせを取得する
     * return array
     */
    static function getOpenNotifications($patient_id)
    {
        $notifications = Notification::where('is_open', 1)->get();
        $notification_data = [];
        $patient_id = $patient_id;
        foreach ($notifications as $notification) {
            if (is_null($notification[$patient_id])){
                $is_read = 0;
            } else {
                $is_read = 1;
            }
            $notification_data[] = [
                "id" => $notification['id'],
                "title" => $notification['title'],
                "content" => $notification['contents'],
                "type" => $notification['importance'],
                "date" => date('Y-m-d H:i', strtotime($notification['delivered_at'])),
                // "isRead" => (bool)rand(0, 1) // TODO: ユーザーがこのお知らせを既読しているかどうかを判定して返却する
                "isRead" => $is_read,
            ];
        }
        return $notification_data;
    }

    /**
     * importanceカラム -> 重要度 変換
     */
    static function convertImportance($notification)
    {
        $importance = $notification['importance'];
        switch ($importance) {
            case 1:
                $importance = "低";
                break;
            case 2:
                $importance = "中";
                break;
            case 3:
                $importance = "高";
                break;
        }
        return $importance;
    }



}