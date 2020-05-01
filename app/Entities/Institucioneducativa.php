<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Institucioneducativa extends Model
{
    protected $table = 'institucioneducativa';
    protected $primaryKey = 'IDInstitucionEducativa';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDInstitucionEducativa', 'descripcion', 'IDDistrito' ,'IDStatus'];
}
