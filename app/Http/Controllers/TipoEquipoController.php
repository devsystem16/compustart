<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\TipoEquipo;


class TipoEquipoController extends Controller
{
    
    public function findAll (){
        return TipoEquipo::all('IDTipoEquipo as value','descripcion as label');
    }

    public function findBy ($id){
        return TipoEquipo::find($id);
    }

    public function create (Request $request){
        return TipoEquipo::create($request->all());
    }

    public function update (Request $request, $id){
        $TipoEquipo = TipoEquipo::findOrFail($id);
        $TipoEquipo->update($request->all());
        return $TipoEquipo;
    }

    public function delete ($id){
        TipoEquipo::find($id)->delete();
        return 204;
    }
    
    

}
