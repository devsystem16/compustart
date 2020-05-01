<?php

namespace App\Http\Controllers;

use App\Entities\Institucioneducativa;
use Illuminate\Http\Request;
 
class InstitucioneducativaController extends Controller
{
    public function findAll (){
        return Institucioneducativa::all();
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
 