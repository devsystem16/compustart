<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Orden;

class OrdenController extends Controller
{
    public function findAll (){
        return Orden::all();
    }

    public function reporteGarantia ($inicio  , $fin ){
        return DB::select ("select  
		o.fecha  as FECHA
		, o.serie AS SERIE
        , o.falla AS FALLA
        , o.informeTecnico  AS TRABAJO
        , concat(c.nombre1  ,' ' , c.nombre2  ,' ' ,  c.apellidoPaterno , ' ' , c.apellidoMaterno ) AS CLIENTE
									from orden o 
                                    inner join cliente c on c.IDCliente = o.IDCliente
                                    inner join garantia g on g.IDGarantia = o.IDGarantia
                                    where g.sinCosto = 1 
                                    and  DATE_FORMAT(o.fecha,'%Y-%m-%d')  >= '".$inicio."' and  DATE_FORMAT(o.fecha,'%Y-%m-%d') <= '".$fin."'
                                    order by o.fecha desc;");
    }


public function getOrden ($numeroOrden){
        return DB::select (" call getOrden ('".$numeroOrden."') ;");
    }

    public function findBy ($id){
        return Orden::find($id);
    }

    public function create (Request $request){
        return Orden::create($request->all());
    }

    public function update (Request $request, $id){
        $Orden = Orden::findOrFail($id);
        $Orden->update($request->all());
        return $Orden;
    }

    public function delete ($id){
        Orden::find($id)->delete();
        return 204;
    }

    public  function getCodigoOrden (){
        return DB::select (" call Orden_getCodigoOrden()");
    }

    public function reporteOrdenes (){
        return DB::select ("call reporteOrdenes();");
    }



}
