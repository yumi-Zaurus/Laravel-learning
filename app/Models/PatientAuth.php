<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientAuth extends Model
{
    use SoftDeletes;

    function index()
    {
        return uniqid(bin2hex(random_bytes(1)));
    }
}
