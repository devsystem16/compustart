<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Ordenfalla;

class OrdenfallaController extends Controller
{
    public function findAll (){
        return Ordenfalla::all();
    }

    public function findBy ($id){
        return Ordenfalla::find($id);
    }

    public function create (Request $request){
        return Ordenfalla::create($request->all());
    }

    public function update (Request $request, $id){
        $Ordenfalla = Ordenfalla::findOrFail($id);
        $Ordenfalla->update($request->all());
        return $Ordenfalla;
    }

    public function delete ($id){
        Ordenfalla::find($id)->delete();
        return 204;
    }
}
