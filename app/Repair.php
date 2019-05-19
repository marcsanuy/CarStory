<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $fillable = [

        'accion', 'kilometros', 'fecha','precio','descripccion', 'imagen',

    ];
}
