<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;



class NotificationController extends Controller
{
    /**
     * お知らせ一覧ページ
     */
    public function index()
    {
        $notifications = Notification::getNotifications();
        return view('notification')
            ->with('notifications', $notifications);
    }

    /**
     * お知らせ追加ページ
     */
    public function add()
    {
        return view('notification-add');
    }

    /**
     * お知らせ追加確認
     */
    public function confirm(Request $request)
    {
        $title = $request->input('title');
        $contents = $request->input('contents');
        $importance = $request->input('importance');
        $delivered_at = $request->input('delivered_at');
        $is_open = $request->input('is_open');

        return view('notification-confirm')->with([
            'title' => $title,
            'contents' => $contents,
            'importance' => $importance,
            'delivered_at' => $delivered_at,
            'is_open' => $is_open,
        ]);
    }

    /**
     * お知らせ登録
     */
    public function register(Request $request)
    {
        $title = $request->input('title');
        $contents = $request->input('contents');
        $importance = $request->input('importance');
        $delivered_at = $request->input('delivered_at');
        $is_open = $request->input('is_open');

        $notification = new Notification();
        $notification->title = $title;
        $notification->contents = $contents;
        $notification->importance = $importance;
        $notification->delivered_at = $delivered_at;
        $notification->is_open = $is_open;
        $notification->save();
        session()->flash('flash_message', '登録が完了しました。');

        return redirect(route('notificationHome'));
    }

    /**
     * お知らせ編集
     */
    public function edit($id)
    {
        $notification = Notification::find($id);

        return view('notification-edit')
            ->with('notification', $notification);
    }

    /**
     * お知らせ更新
     */
    public function update(Request $request)
    {
        $notification_id = $request->input('notification_id');
        $title = $request->input('title');
        $contents = $request->input('contents');
        $importance = $request->input('importance');
        $delivered_at = $request->input('delivered_at');
        $is_open = $request->input('is_open');

        $notification = Notification::find($notification_id);
        $notification->title = $title;
        $notification->contents = $contents;
        $notification->importance = $importance;
        $notification->delivered_at = $delivered_at;
        $notification->is_open = $is_open;
        $notification->save();
        session()->flash('flash_message', '更新が完了しました。');

        return redirect(route('notificationHome'));
    }
}