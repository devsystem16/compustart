<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Ciudad;


class CiudadController extends Controller
{
    public function findAll (){
        return Ciudad::all('IDCiudad as value','Descripcion as label');
    }

    public function findBy ($id){
        return Ciudad::find($id);
    }

    public function create (Request $request){
        return Ciudad::create($request->all());
    }

    public function update (Request $request, $id){
        $Ciudad = Ciudad::findOrFail($id);
        $Ciudad->update($request->all());
        return $Ciudad;
    }

    public function delete ($id){
        Ciudad::find($id)->delete();
        return 204;
    }
}
