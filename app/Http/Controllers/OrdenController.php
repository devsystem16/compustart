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
        , UPPER( concat(ifnull( c.nombre1,'')  ,' ' , ifnull( c.nombre2,'')  ,' ' ,  ifnull( c.apellidoPaterno,'') , ' ' ,ifnull(  c.apellidoMaterno,'') ) ) AS CLIENTE
        , eo.descripcion  AS 'ESTADO'
									from orden o 
                                    inner join cliente c on c.IDCliente = o.IDCliente
                                    inner join garantia g on g.IDGarantia = o.IDGarantia
                                    inner join estadoorden eo on o.IDEstadoOrden = eo.IDEstadoOrden
                                    where g.sinCosto = 1 
                                    and   g.mostrarExcel = 1
                                   and  DATE_FORMAT(o.fecha,'%Y-%m-%d') BETWEEN  '".$inicio."' and  '".$fin."'
                                   and o.IDStatus = (select  IDStatus from status where descripcion='Activo')
                                  order by o.fecha desc;");
    }

public function reporteGarantiaSoloHaitech ($inicio  , $fin ){
        return DB::select ("select  
	 
        o.serie AS 'NRO DE SERIE'
      , c.cedula as CEDULA
      , UPPER( concat( ifnull( c.nombre1,'')  ,' ' , ifnull( c.nombre2 ,'')  ,' ' , ifnull( c.apellidoPaterno ,'') , ' ' , ifnull(c.apellidoMaterno,'') ) )AS CUSTODIO
      , o.falla AS INCIDENTE
      , o.informeTecnico  AS SOLUCION
      , eo.descripcion as ESTADO
      
                                  from orden o 
                                  inner join cliente c on c.IDCliente = o.IDCliente
                                  inner join garantia g on g.IDGarantia = o.IDGarantia
                                  INNER JOIN usuario u on u.IDUsuario   = o.IDUsuario
                                  INNER JOIN estadoorden eo on eo.IDEstadoOrden  = o.IDEstadoOrden
                                  where g.sinCosto = 1
                                  and   g.mostrarExcel = 1
                                  and  DATE_FORMAT(o.fecha,'%Y-%m-%d') BETWEEN  '".$inicio."' and  '".$fin."'
                                  and o.IDStatus = (select  IDStatus from status where descripcion='Activo')
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
