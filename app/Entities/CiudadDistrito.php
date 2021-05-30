<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CiudadDistrito extends Model
{
    protected $table = 'ciudad_distrito';
    protected $primaryKey = 'IDCiudadDistrito';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDCiudadDistrito', 'descripcion', 'IDDistrito' , 'IDStatus'];
    
}
