<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infor extends Model
{
    //
    protected $table = "infor";

    protected $fillable = [
        'address',
        'height',
        'weight',
        'phonenumber',
        'email',
        'facebook',
        'hobby',
        'weekness',
    ];

    public function job()
    {
        return $this->hasOne('App\Models\Job', 'id', 'id');
    }
}
