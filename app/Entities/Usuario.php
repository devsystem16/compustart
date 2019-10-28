<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'IDUsuario';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable =['IDUsuario', 'cedula', 'nombre1', 'nombre2', 'apellidoPaterno', 'apellidoMaterno', 'celular', 'direccion', 'correo', 'IDStatus', 'nick', 'pass', 'IDRol'];

}
