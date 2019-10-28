<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Abonos extends Model
{
    protected $table = 'abonos';
    protected $primaryKey = 'IDAbono';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [ 'valor',  'descripcion', 'IDOrden'];
    
}
