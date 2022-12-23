<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\WelcomeController;
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
//Route::get('/', [WelcomeController::class, 'blogs']);
Route::get('/linkstorage', function () { $targetFolder = base_path().'/storage/app/public'; $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage'; symlink($targetFolder, $linkFolder); });
Route::resource('categorias',CategoriaController::class);
Route::get('/',[WelcomeController::class,'blogs'])->name('inicio');
Route::resource('productos',ProductoController::class); 
Route::get('productos/file/{producto}', [ProductoController::class, 'picture'])->name('producto.pictures');
Route::resource('files',FilesController::class); 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
