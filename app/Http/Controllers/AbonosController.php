<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Abonos;

class AbonosController extends Controller
{
    public function findAll (){
        return Abonos::all();
    }

    public function findBy ($id){
        return Abonos::find($id);
    }

    public function create (Request $request){
        return Abonos::create($request->all());
    }

    public function update (Request $request, $id){
        $Abonos = Abonos::findOrFail($id);
        $Abonos->update($request->all());
        return $Abonos;
    }

    public function delete ($id){
        Abonos::find($id)->delete();
        return 204;
    }
}
