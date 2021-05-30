<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distrito';
    protected $primaryKey = 'IDDistrito';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDDistrito', 'descripcion', 'IDStatus', 'IDZona'];
}
