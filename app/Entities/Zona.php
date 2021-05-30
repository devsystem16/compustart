<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = 'zonas';
    protected $primaryKey = 'IDZona';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDZona', 'descripcion', 'IDStatus'];
    
}
