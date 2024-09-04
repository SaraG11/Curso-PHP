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
    echo 'Hola mundo';
});

Route::get('/date', function () {
    return view('date');
});

Route::get('/pelicula/{titulo}/{year?}', function($titulo, $year = 2019){
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year'  => '[0-9]+'
));

Route::get('/movieslist', function(){
    $title = "Movies";
    $list = array('Batman', 'Spiderman', 'Wolverin');
    // return view('peliculas.movieslist', array(
    //     'title' => $title
    // ));
    return view('peliculas.movieslist')
            ->with('title', $title)
            ->with('list', $list);
});

Route::get('/generic', function(){
    return view('page');
});
