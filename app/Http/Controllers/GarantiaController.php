<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Garantia;


class GarantiaController extends Controller
{
    public function findAll (){
        return Garantia::all();
    }

    public function findBy ($id){
        return Garantia::find($id);
    }

    public function create (Request $request){
        return Garantia::create($request->all());
    }

    public function update (Request $request, $id){
        $Garantia = Garantia::findOrFail($id);
        $Garantia->update($request->all());
        return $Garantia;
    }

    public function delete ($id){
        Garantia::find($id)->delete();
        return 204;
    }
}
