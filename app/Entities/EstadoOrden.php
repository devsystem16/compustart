<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class EstadoOrden extends Model
{
    protected $table = 'estadoorden';
    protected $primaryKey = 'IDEstadoOrden';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDEstadoOrden', 'descripcion'];
    
}
