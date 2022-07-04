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

Route::prefix('web')->group(function () {

    Route::get('/', function () {
        // return view('welcome');
        return 'Olá';
    })->name('variosusuarios');

    Route::get('/{id}', function () {
        return 'Olá essa tem um id';
    })->name('apenasumusuario');
});
