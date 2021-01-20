<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tecket extends Model
{
    protected $fillable = [
        'user_id','tour_id'
    ];
}
