<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Models\Endoscopia;
use Illuminate\Routing\Route as RoutingRoute;

//Vista principal
Route::get('/', function () {
    return view('auth.login');
});

Route::resource('endoscopia','App\Http\Controllers\EndoscopiaController');
Route::resource('categorias','App\Http\Controllers\categoriaController');
Route::resource('controlUniversal','App\Http\Controllers\UniversalControllerController');
Route::resource('consultaexternas','App\Http\Controllers\ConsultaexternaController');
Route::resource('fuerzas','App\Http\Controllers\FuerzaController');
Route::resource('pacientes','App\Http\Controllers\PacienteController');
Route::resource('medicos','App\Http\Controllers\MedicoController');
Route::resource('especialidad-medicos','App\Http\Controllers\EspecialidadMedicoController');

Route::post('/getDoctors/{id}', 'DoctorController@getDoctors')->name('getDoctors');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    
    //AJAX
    /* Route:: get('/especialidades/{EspecialidadMedico}/Especialidad','App\Http\Controllers\EspecialidadMedicoController','doctores');
 */

    })->name('dash');
});

/* Route::get('/', function () {
    return view('vista1');
}); */

//Route::get('/','App\Http\Controllers\InicioController@index');

/*
if (View::exists('Vista2')) {
    Route::get('/', function () {
        return view('vista1');
    });
} else {
    Route::get('/', function () {
        return 'La vista no existe';
    });
}

Route::get('/', function () {
    return view('vista1', ['nombre'=>'Frenny']);
});


//Rutas creadas
Route::get('/texto', function(){
    return '<h1>PROBANDO LAS RUTAS CON TEXTO</h1>';
});

//Rutas creadas ejemplos 
//2
Route::get('/arreglo', function(){
    $arreglo = [
        'id'=> '1',
        'Descripcion' => '2'
    ];
    return $arreglo;
});

//3 llamar algo recibiendo datos y sin ello da error 
route::get('/nombre/{nombre}',function($nombre){
    return '<h1> El nombre es: '.$nombre.'</h1>';
});

//4 llamr algo aunque vaya vacio se devuelve algo predefinidido
route::get('/cliente/{cliente?}',function($cliente='Cliente General'){
    return '<h1> El cliente es: '.$cliente.'</h1>';
});

//5
Route::get('/ruta1', function(){
    return '<h1>Vista de la ruta 1</h1>';
})->name('ruta#1');

// REDIRECCION DE RUTAS
Route::get('/ruta2', function(){
    //return '<h1>Vista de la ruta 2</h1>';
    return redirect()->route('ruta#1');
});

//6 EJEMPLOS CON USUARIOS
route::get('/usuario/{usuario}',function($usuario){
    return '<h1>El usuario es: '.$usuario.'</h1>';
})->where('usuario','[A-Za-z]+');

*/

