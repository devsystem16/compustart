<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    protected $table = 'garantia';
    protected $primaryKey = 'IDGarantia';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDGarantia', 'descripcion', 'sinCosto'];
    
}
