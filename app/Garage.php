<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $fillable = [

        'marca', 'modelo', 'matricula','version','fecha_matriculacion', 'distintivo_medioambiental_dgt', 'imagen',

    ];

    public function repairments()
    {
        return $this->hasMany('App\Repair');
    }
}
