<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Patient;



class NewsController extends Controller
{
    /**
     * news一覧ページ
     */
    public function index()
    {
        return view('news');
    }

    /**
     *
     */
    public function add()
    {
        return view('news-add');
    }

}