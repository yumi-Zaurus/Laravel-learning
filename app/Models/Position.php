<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use SoftDeletes;

    /**
     * Positionを取得する
     * return array
     */
    static function getPositions()
    {
        $positions = Position::all()->sortBy('sort_order');
        $positions_data = [];
        foreach($positions as $position) {
            $positions_data[$position->id] = $position;
        }
        return $positions_data;
    }
}
