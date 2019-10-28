<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudad';
    protected $primaryKey = 'IDCiudad';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDCiudad', 'descripcion', 'IDStatus'];
    
}
