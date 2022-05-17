<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
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

Route::get('/', [PrincipalController::class, 'site']);
Route::get('/empresas', [PrincipalController::class, 'site']);
Route::get('/tecnicos', [PrincipalController::class, 'site']);
Route::get('/relatorios', [PrincipalController::class, 'site']);