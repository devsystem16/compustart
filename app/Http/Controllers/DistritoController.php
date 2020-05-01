<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Distrito;

class DistritoController extends Controller
{
    public function findAll (){
        return Distrito::all();
    }

    public function findBy ($id){
        return Distrito::find($id);
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
 