<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    protected $fillable = [

        'id', 'make', 'model', 'license_number','license_expiry'

    ];
    protected $hidden = [



    ];
}
