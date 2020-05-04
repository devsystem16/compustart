<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Catalogofallas;
use SebastianBergmann\Environment\Console;

class CatalogofallasController extends Controller
{
    public function findAll (){
        return Catalogofallas::all('IDCatalogoFallas as value','descripcion as label');
    }

    public function findBy ($id){
        return Catalogofallas::find($id);
    }

    public function create (Request $request  ){
        $affected =   Catalogofallas::insert( $request->toArray() );  
        return [
            'code' =>  200 ,
            'status' => $affected   
        ];
    }

    public function update (Request $request, $id){
        $EstadoOrden = Catalogofallas::findOrFail($id);
        $EstadoOrden->update($request->all());
        return $EstadoOrden;
    }

    public function delete ($id){
        Catalogofallas::find($id)->delete();
        return 204;
    }
    
    
}
 