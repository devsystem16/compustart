<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Ordenfalla extends Model
{
    protected $table = 'ordenfalla';
    protected $primaryKey = 'IDOrdenFalla';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [ 'valor',  'IDOrden', 'IDCatalogoFallas'];
    
}
