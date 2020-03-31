<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Couple_Request extends Model
{
    //
    protected $table = "couple_request";
    protected $fillable = [
        'id',
        'id2',
        'message',
    ];
}
