<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Catalogofallas extends Model
{
    protected $table = 'catalogoFallas';
    protected $primaryKey = 'IDCatalogoFallas';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDCatalogoFallas', 'descripcion', 'IDStatus'];
}
