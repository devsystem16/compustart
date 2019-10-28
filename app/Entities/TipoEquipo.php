<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
    protected $table = 'tipoequipo';
    protected $primaryKey = 'IDTipoEquipo';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDTipoEquipo', 'descripcion', 'IDStatus'];
    
}
