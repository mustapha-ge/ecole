<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NameCours', 'Typecours', 'DurationCours', 'Coeff'
    ];

}
