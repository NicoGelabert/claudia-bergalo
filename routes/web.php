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

// Route::get('/', function () {
//     return view('welcome');
// });

//Trabajos//
// Route::get('/', function (){
//     return view('works.workslist');
// });

Route::get('/', 'App\Http\Controllers\WorkController@index');

//Sobre mí//
Route::get('/sobremi', function (){
    return view('sobremi');
});

//Servicios//
Route::get('/servicios', function (){
    return view('servicios');
});

//Contacto//
Route::get('contacto', function(){
    return view('contacto');
});