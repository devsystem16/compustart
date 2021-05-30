<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'orden';
    protected $primaryKey = 'IDOrden';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['IDOrden', 'numeroOrden', 'modelo', 'serie', 'accesorios', 'falla', 'fecha', 'total', 'informeTecnico', 'IDTipoEquipo', 'IDMarca', 'IDCliente', 'IDStatus', 'IDGarantia', 'IDUsuario', 'IDEstadoOrden', 'orden_varchar1', 'orden_varchar2', 'orden_entero1', 'orden_entero2' ,'numeroticket'];
    
}
