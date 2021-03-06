<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Cliente;

class ClienteController extends Controller
{
    public function findAllss (){
        return DB::select (" call cliente_getListadoClientes(); ");
        // return Cliente::all()
    }

    public function findAll (){
        return DB::select ("call cliente_getListadoClientesCompleto ();");
        // return Cliente::all()
    }

    public  function getCodigoCliente (){
        return DB::select (" call Cliente_getCodigoCliente()");
    }

    public function findBy ($id){
        return Cliente::find($id);
    }

    public function create (Request $request){
         $existeUser = DB::select (" select * from  cliente where cedula ='". $request->cedula."' AND IDStatus= (select  IDStatus from status where descripcion ='Activo')");  
         if ( $existeUser ) {
            return [
                'code' =>  400 ,
                'message' => 'El usuario ya existe'
            ];
         }else {
            return Cliente::create($request->all());
         }
    }

    public function update (Request $request, $id){
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return $cliente;
    }

    public function delete ($id){
        Cliente::find($id)->delete();
        return 204;
    }
}
