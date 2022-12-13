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

Route::get('/', [\App\Http\Controllers\ProjetsController::class, 'index'])
    ->name('projets.index');

Route::get('/projets/{projet}/{slug}.html', [\App\Http\Controllers\ProjetsController::class, 'show'])
    ->whereNumber('id')
    ->name('projets.show');

Route::get('/projets/create', [\App\Http\Controllers\ProjetsController::class, 'create'])
    ->name('projets.create');

Route::resource('projets', \App\Http\Controllers\ProjetsController::class);

Route::get('/abonnes/store', [\App\Http\Controllers\AbonnesController::class, 'store'])
    ->name('abonnes.store');
