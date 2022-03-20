<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestAPIController extends Controller
{
   public function index()
   {
      // 仮API
      $response = [
         [
            "id" => 1,
            "title" => "休診のお知らせ（１１月）",
            "content" => "１１月の休診スケジュールをお知らせします。１１月の休診スケジュールをお知らせします。１１月の休診スケジュールをお知らせします。",
            "type" => 1,
            "date" => "2021-11-01 20:00"
         ],
         [
            "id" => 2,
            "title" => "休診のお知らせ（１２月）",
            "content" => "院内工事のため、３月11日は休診いたします。院内工事のため、３月11日は休診いたします。院内工事のため、３月11日は休診いたします。院内工事のため、３月11日は休診いたします。院内工事のため、３月11日は休診いたします。",
            "type" => 3,
            "date" => "2021-12-01 20:00"
         ],
         [
            "id" => 3,
            "title" => "休診のお知らせ（１月）",
            "content" => "院内工事のため、３月11日は休診いたします。",
            "type" => 3,
            "date" => "2022-01-01 08:23"
         ],
         [
            "id" => 4,
            "title" => "休診のお知らせ（２月）",
            "content" => "雷雨のため、休診します。",
            "type" => 2,
            "date" => "2022-02-03 15:23"
         ],
         [
            "id" => 5,
            "title" => "休診のお知らせ（３月）",
            "content" => "足を怪我したたため、休診します。",
            "type" => 2,
            "date" => "2022-03-03 15:23"
         ],
         [
            "id" => 6,
            "title" => "休診のお知らせ（４月）",
            "content" => "働くのが嫌になったため、休診します。",
            "type" => 2,
            "date" => "2022-04-03 15:23"
         ],
         [
            "id" => 7,
            "title" => "ゆみさん",
            "content" => "働くのが嫌になったため、休診します。",
            "type" => 2,
            "date" => "2022-04-03 15:23"
         ],
      ];
		return $response;
   }
}
