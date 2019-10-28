<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\EstadoOrden;

class EstadoOrdenController extends Controller
{
    public function findAll (){
        return EstadoOrden::all();
    }

    public function findBy ($id){
        return EstadoOrden::find($id);
    }

    public function create (Request $request){
        return EstadoOrden::create($request->all());
    }

    public function update (Request $request, $id){
        $EstadoOrden = EstadoOrden::findOrFail($id);
        $EstadoOrden->update($request->all());
        return $EstadoOrden;
    }

    public function delete ($id){
        EstadoOrden::find($id)->delete();
        return 204;
    }
    
    
}
