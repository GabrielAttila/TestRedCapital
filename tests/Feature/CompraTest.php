<?php

namespace Tests\Feature;

use App\Models\Categoria;
use App\Models\Compra;
use App\Models\DetalleCompra;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompraTest extends TestCase
{
    //use RefreshDatabase;
    public function test_lista_de_compras_con_sus_detalles_asociados()
    {
        factory(Compra::class)->create([
            'producto' => 'Patata',
            'cantidad' => 5,
        ]);

        factory(Categoria::class, 5)->create(
            ['nombre' => 'Verduras']
        );

        $this->generarCompra();

        $this
            ->followingRedirects()
            ->get(route('compra.list'))
            ->assertViewIs('page.compra.list')
            ->assertSee('Listado de compras')
            ->assertSee('Verduras');
    }

    public function generarCompra()
    {
        factory(Compra::class,20)->create();
        factory(Categoria::class, 5)->create();

        $compras = Compra::all();
        $categorias = Categoria::all();

        foreach($compras as $compra){
            factory(DetalleCompra::class)->create([
                'compra_id' => $compra->id,
                'categoria_id' => $categorias->random()->id,
            ]);
        }
    }
}
