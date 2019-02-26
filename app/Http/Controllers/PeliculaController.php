<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PeliculaController extends Controller
{
    public function index()
    {
        $generos = array('Drama','Comedia','Acción','Terror');

        return view('page.pelicula.index', compact('generos'));
    }

    public function show($genero)
    {
        $generos = array('Drama','Comedia','Acción','Terror');

        if (!in_array($genero, $generos))
            throw new NotFoundHttpException;

        return view('page.pelicula.show', compact('genero'));
    }
}
