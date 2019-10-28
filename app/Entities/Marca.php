<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
      protected $table = 'marca';
      protected $primaryKey = 'IDMarca';
      public $incrementing = false;
      public $timestamps = false;
      protected $fillable = ['IDMarca', 'descripcion', 'IDStatus'];
}
