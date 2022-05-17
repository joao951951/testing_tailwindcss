<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\site\EmpresaController;
use App\Http\Controllers\site\TecnicoController;

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

Route::get('/principal', [PrincipalController::class, 'site']);
Route::get('/empresas', [EmpresaController::class, 'site']);
Route::get('/tecnicos', [TecnicoController::class, 'site']);
Route::get('/relatorios', [PrincipalController::class, 'site']);