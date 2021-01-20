<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'name', 'detail','price','duration','class','photo','startDate', 'endDate',
            'location','counter'
    ];
}
