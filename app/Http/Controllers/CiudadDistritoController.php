<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\CiudadDistrito;
class CiudadDistritoController extends Controller
{
    public function findAll (){
        return CiudadDistrito::all();
    }

    public function findByDistrito ($idDistrito){
        // return DB::select (" call cargarColegios('".$idDistrit."'); ");
        return DB::select (" SELECT   IDCiudadDistrito as value , descripcion as label  , IDDistrito  FROM compuservices.ciudad_distrito  where 
         IDDistrito='".$idDistrito."'
        AND IDStatus =(select  IDStatus from status where descripcion ='Activo') ;");
    }

}
