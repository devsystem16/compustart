<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'IDRol';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDRol', 'descripcion', 'IDStatus'];
    
}
