<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'IDCliente';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable =['IDCliente', 'codigo', 'cedula', 'nombre1', 'nombre2', 'apellidoPaterno', 'apellidoMaterno', 'celular', 'direccion', 'correo', 'IDStatus', 'IDCiudad'];

}
