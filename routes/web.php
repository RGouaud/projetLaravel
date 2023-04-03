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

Route::get('/', function () {
    return view('index');
});

Route::get('/sauces', function () {
    return view('sauces');
});

Route::get('/sauces/{id}', function ($id) {
    return view('sauce', ['id' => $id]);
});

Route::get('/ajoutSauce', function () {
    return view('ajoutSauce');
});
