<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Status;



class StatusController extends Controller
{
    
    public function getEstado ($opcion) {
        return  Status::where('descripcion', $opcion)->first();
    }
}
