<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PeliculaTest extends TestCase
{
    function test_listado_de_generos_de_peliculas()
    {
        $this
            ->followingRedirects()
            ->get(route('pelicula.index'))
            ->assertSuccessful()
            ->assertViewIs('page.pelicula.index')
            ->assertSee('Lista de generos')
            ->assertSee('Drama')
            ->assertSee('Comedia')
            ->assertSee('Acción')
            ->assertSee('Terror');
    }

    function test_lista_de_peliculas_por_genero()
    {
        $genero = 'Terror';

        $this
            ->followingRedirects()
            ->get(route('pelicula.show', $genero))
            ->assertSuccessful()
            ->assertViewIs('page.pelicula.show')
            ->assertSee('Lista de peliculas del genero '. $genero)
            ->assertSee('Terror');
    }
}
