<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Marca;


class MarcaController extends Controller
{
    public function findAll (){
        return Marca::all('IDMarca as value','descripcion as label');
    }

    public function findBy ($id){
        return Marca::find($id);
    }

    public function create (Request $request){
        return Marca::create($request->all());
    }

    public function update (Request $request, $id){
        $Marca = Marca::findOrFail($id);
        $Marca->update($request->all());
        return $Marca;
    }

    public function delete ($id){
        Marca::find($id)->delete();
        return 204;
    }
}
