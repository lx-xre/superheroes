<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    
    public $timestamps = false;
    
    protected $fillable = [
        'nombre_real',
        'nombre_heroe',
        'foto',
        'info_adicional'
    ];
    
}
