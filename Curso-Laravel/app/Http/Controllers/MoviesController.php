<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index($page = 1){
        $title = 'Listado de mis Peliculas';
        return view('movie.index', [
            'title' => $title,
            'page' => $page
        ]);
    }

    public function detail(){
        return view('movie.detail');
    }

    public function redirect(){
        return redirect()->action([MoviesController::class, 'index']);
    }
}
 