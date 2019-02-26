<?php

use Illuminate\Database\Seeder;
use App\Models\{Categoria, Compra, DetalleCompra};

class DetalleCompraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
