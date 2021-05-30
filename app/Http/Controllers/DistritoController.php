<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Distrito;

class DistritoController extends Controller
{
    public function findAll (){
        return Distrito::all('IDDistrito as value','descripcion as label');
    }

    public function findBy ($id){
        return Distrito::find($id);
    }


    public function findByZona ($idZona){
        // return DB::select (" call cargarColegios('".$idDistrit."'); ");
        return DB::select (" SELECT  IDDistrito as value , descripcion as label , IDZona  FROM compuservices.distrito  where 
         IDZona='".$idZona."'
        AND IDStatus =(select  IDStatus from status where descripcion ='Activo') ;");
    }

    public function create (Request $request){
        return Distrito::create($request->all());
    }

    public function update (Request $request, $id){
        $EstadoOrden = Distrito::findOrFail($id);
        $EstadoOrden->update($request->all());
        return $EstadoOrden;
    }

    public function delete ($id){
        Distrito::find($id)->delete();
        return 204;
    }
    
    
}
 