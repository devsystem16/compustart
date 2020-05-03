<?php

namespace App\Http\Controllers;

use App\Entities\Institucioneducativa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstitucioneducativaController extends Controller
{
    public function findAll (){
   
        return Institucioneducativa::all('IDInstitucionEducativa as value','Descripcion as label' , 'IDDistrito as distrito' );
    }

    public function findByDistrit ($idDistrit){
        // return DB::select (" call cargarColegios('".$idDistrit."'); ");

        return DB::select (" SELECT IDInstitucionEducativa as value , descripcion as label , IDDistrito FROM compuservices.institucioneducativa  where 
         IDDistrito='".$idDistrit."'
        AND IDStatus =(select  IDStatus from status where descripcion ='Activo') ;");

        
    }

    public function findBy ($id){
        return Institucioneducativa::find($id);
    }

    public function create (Request $request){
        return Institucioneducativa::create($request->all());
    }

    public function update (Request $request, $id){
        $EstadoOrden = Institucioneducativa::findOrFail($id);
        $EstadoOrden->update($request->all());
        return $EstadoOrden;
    }

    public function delete ($id){
        Institucioneducativa::find($id)->delete();
        return 204;
    }
    
    
}
 