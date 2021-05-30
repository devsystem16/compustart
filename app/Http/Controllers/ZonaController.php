<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\DB;
use App\Entities\Zona;
class ZonaController extends Controller
{
    public function findAll (){
        return Zona::all('IDZona as value','descripcion as label');
    }

}
