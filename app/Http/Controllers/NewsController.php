<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;



class NotificationController extends Controller
{
    /**
     * news一覧ページ
     */
    public function index()
    {
        return view('notification');
    }

    /**
     *
     */
    public function add()
    {
        return view('notification-add');
    }

}