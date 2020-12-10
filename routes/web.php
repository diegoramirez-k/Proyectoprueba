<?php
use Illuminate\Support\Facades\Route;
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
Route::resource('/', '\App\Http\Controllers\productosController');
Route::get('login', function() {
    return view('autenticar');
    //buscara el archivo 'autenticar.php' o 'autenticar.blade.php' dentro de resoureces/views
});
Route::get('tablero', function() {
    return view('supervisor.tablero');
    //buscara el archivo 'tablero.php' o 'tablero.blade.php' dentro de resoureces/views/supervisor
});
Route::get('revisar', function() {
    return view('encargado.revisar');
});
Route::resource('empleados','\App\Http\Controllers\EmpleadosController');
Route::get('totalizar', function() {
    return view('contador.totalizar');
});
Route::get('cuenta', function() {
    return view('cliente.cuenta');
});
Route::post('validar', 'AutenticarControler@validar');
Route::get('listar_por_categoria/{categoria_id}','BuscarControler@listar_por');
Route::resource('categorias', 'CategoriasController');
Route::resource('productos', 'productosController');

Auth::routes(['reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
