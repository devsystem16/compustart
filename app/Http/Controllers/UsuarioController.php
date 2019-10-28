<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Usuario;

class UsuarioController extends Controller
{
    public function findAll (){
        return Usuario::all();
    }

    public function listadoTecnicosYadministradores (){
        return DB::select ("select u.* from usuario u inner join rol r 
                                                        on r.IDRol = u.IDRol
                                                        where u.IDStatus = (select IDStatus from status where descripcion ='Activo')
                                                        and r.descripcion in ('Técnico','Administrador')");
         
    }

    public function listadoUsuariosRol (){
        return DB::select ("call listadoUsuariosRol();");
         
    }


    public function findBy ($id){
        return Usuario::find($id);
    }

    public function create (Request $request){
        return Usuario::create($request->all());
    }

    public function update (Request $request, $id){
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return $usuario;
    }

    public function delete ($id){
        Usuario::find($id)->delete();
        return 204;
    }

    public function login (Request $request){
       


        $usuario =   DB::select (" call login('".$request->get("user")."' , '".$request->get("pass")."')");


    //    $usuario = Usuario::where('nick', $request->get("user"))->where('pass', $request->get("pass")) 
    //   ->first();


       
        if (count($usuario) < 1) {
            return [
                'code' =>  204 ,
                'message' => 'Usuario no encontrado'
            ];
        }else {
            return  $usuario    ;
        }
 
    }


}
