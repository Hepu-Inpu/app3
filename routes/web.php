<?php

use Illuminate\Support\Facades\Route;
//invocar el controlador desde su ruta
use App\Http\Controllers\miprimerController;

use App\Http\Controllers\heladosController;

use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\CursoController;

use Illuminate\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Lo primero es nombrar la ruta entre la comilla simple con el nombre que de see darle. luego va la coma(,)
seguido va el function y el return
*/
route::get('/miprimeraruta', function () {
    return 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu';
});

/*
Los parametros son muy importantes en las paginas web y las
ubicamos entre llaves {}. Los parametros van dentro de la
misma ruta
*/

Route::get('/minombre/{nombre}', function ($nombre) {
    return $nombre . 'es good';

});

Route::get('/suma/{n1}/{n2}', function ($n1, $n2) {
    return 'la suma de ' . $n1 . ' y ' . $n2 . ' es de: ' . $n1+$n2;
});

Route::get('micontroller/{a}/{b}', [miprimerController::class,'suma']);

Route::get('frijoles/{a}', [miprimerController::class,'carrera']);
/*La clase va igual que el metodo entre parentesis cuadrados.
La clase va acompañada de ::class, y el metodo tiene que llamarse igual
a como esta en la clase y entre comilla simple*/
Route::get('heladeria/{opc}', [heladosController::class, 'helado']);

Route::get('precio/{precio}', [ControladorPrecios::class, 'precios']);

Route::get('iva/{artic}/{pr}', [ControladorPrecios::class, 'getIVA']);
Route::resource('curso',CursoController::class );

