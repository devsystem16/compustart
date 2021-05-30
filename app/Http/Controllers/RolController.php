<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Rol;

class RolController extends Controller
{
    public function findAll (){
      return DB::select (" SELECT * FROM compuservices.rol where IDStatus = (select   IDStatus from status  where descripcion ='Activo');");
    }

    public function findBy ($id){
        return Rol::find($id);
    }

    public function create (Request $request){
        return Rol::create($request->all());
    }

    public function update (Request $request, $id){
        $Rol = Rol::findOrFail($id);
        $Rol->update($request->all());
        return $Rol;
    }

    public function delete ($id){
        Rol::find($id)->delete();
        return 204;
    }
    
}
