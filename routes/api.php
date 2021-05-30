<?php
 use Illuminate\Http\Request; 
 use Ramsey\Uuid\Uuid;
 use Illuminate\Support\Facades\DB;

 
 
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
 
    Route::get('/usuario',  'UsuarioController@findAll');
    Route::get('/usuario/{id}',  'UsuarioController@findBy');
    Route::get('/usuario_cli_tec',  'UsuarioController@listadoTecnicosYadministradores');
    Route::get('/listadoUsuariosRol',  'UsuarioController@listadoUsuariosRol');
    
    Route::post('/usuario',  'UsuarioController@create');
    Route::post('/usuario/{id}',  'UsuarioController@update');
    Route::delete('/usuario/{id}',  'UsuarioController@delete');
    Route::get('/login',  'UsuarioController@login');




 
    Route::get('/cliente',  'ClienteController@findAll');
    Route::get('/clientes-desconcatenado',  'ClienteController@findAllDesconcat');

    Route::get('/cliente/{id}',  'ClienteController@findBy');
    Route::post('/cliente',  'ClienteController@create');
    Route::post('/cliente/{id}',  'ClienteController@update');
    Route::delete('/cliente/{id}',  'ClienteController@delete');
    Route::get('/clientecodigo',  'ClienteController@getCodigoCliente');

    


    Route::get('/marca',  'MarcaController@findAll');
    Route::get('/marca/{id}',  'MarcaController@findBy');
    Route::post('/marca',  'MarcaController@create');
    Route::post('/marca/{id}',  'MarcaController@update');
    Route::delete('/marca/{id}',  'MarcaController@delete');
 
    Route::get('/orden',  'OrdenController@findAll');
    Route::get('/orden/{id}',  'OrdenController@findBy');
    Route::post('/orden',  'OrdenController@create');
    Route::post('/orden/{id}',  'OrdenController@update');
    Route::delete('/orden/{id}',  'OrdenController@delete');
    Route::get('/reporteOrdenes',  'OrdenController@reporteOrdenes');
    Route::get('/ordencodigo',  'OrdenController@getCodigoOrden');
    Route::get('/reporteOrdenesGarantia/{fechaInicio}/{fechaFin}',  'OrdenController@reporteGarantia');
    Route::get('/reporteOrdenesGarantiaHaitech/{fechaInicio}/{fechaFin}',  'OrdenController@reporteGarantiaSoloHaitech');

    Route::get('/getorden/{numeroorden}',  'OrdenController@getOrden');
    Route::get('/get-info-ticket/{IDOrden}',  'OrdenController@getInfoTicket');


    Route::get('/tipoequipo',  'TipoEquipoController@findAll');
    Route::get('/tipoequipo/{id}',  'TipoEquipoController@findBy');
    Route::post('/tipoequipo',  'TipoEquipoController@create');
    Route::post('/tipoequipo/{id}',  'TipoEquipoController@update');
    Route::delete('/tipoequipo/{id}',  'TipoEquipoController@delete');
 
    Route::get('/ciudad',  'CiudadController@findAll');
    Route::get('/ciudad/{id}',  'CiudadController@findBy');
    Route::post('/ciudad',  'CiudadController@create');
    Route::post('/ciudad/{id}',  'CiudadController@update');
    Route::delete('/ciudad/{id}',  'CiudadController@delete');
 
    Route::get('/garantia',  'GarantiaController@findAll');
    Route::get('/garantia/{id}',  'GarantiaController@findBy');
    Route::post('/garantia',  'GarantiaController@create');
    Route::post('/garantia/{id}',  'GarantiaController@update');
    Route::delete('/garantia/{id}',  'GarantiaController@delete');
 
    Route::get('/estadoorden',  'EstadoOrdenController@findAll');
    Route::get('/estadoorden/{id}',  'EstadoOrdenController@findBy');
    Route::post('/estadoorden',  'EstadoOrdenController@create');
    Route::post('/estadoorden/{id}',  'EstadoOrdenController@update');
    Route::delete('/estadoorden/{id}',  'EstadoOrdenController@delete');
 
    Route::get('/rol',  'RolController@findAll');
    Route::get('/rol/{id}',  'RolController@findBy');
    Route::post('/rol',  'RolController@create');
    Route::post('/rol/{id}',  'RolController@update');
    Route::delete('/rol/{id}',  'RolController@delete');
 
    Route::get('/ordenfalla',  'OrdenfallaController@findAll');
    Route::get('/ordenfalla/{id}',  'OrdenfallaController@findBy');
    Route::post('/ordenfalla',  'OrdenfallaController@create');
    Route::post('/ordenfalla/{id}',  'OrdenfallaController@update');
    Route::delete('/ordenfalla/{id}',  'OrdenfallaController@delete');

    Route::get('/getStatus/{estado}','StatusController@getEstado');


    Route::get('/zonas',  'ZonaController@findAll');
    Route::get('/distrito',  'DistritoController@findAll');
    Route::get('/distrito/{idZona}',  'DistritoController@findByZona');
    Route::get('/ciudad-distrito/{idDistrito}',  'CiudadDistritoController@findByDistrito');


    Route::get('/ciudad-distrito',  'CiudadDistritoController@findAll');

    Route::get('/colegios',  'InstitucioneducativaController@findAll');
    Route::get('/colegios/{idCiudadDistrito}',  'InstitucioneducativaController@findByCiudadDistrit');


    Route::get('/catalogofallas',  'CatalogofallasController@findAll');
    Route::post('/catalogofallas',  'CatalogofallasController@create');


    Route::get('/uuid', function (Request $request) {
        $uuid1 = Uuid::uuid1();
        return    $uuid1   ;
    });

 