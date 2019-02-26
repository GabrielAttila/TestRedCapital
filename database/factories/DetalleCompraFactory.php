<?php

use Faker\Generator as Faker;
use App\Models\{Categoria, Compra};

$factory->define(App\Models\DetalleCompra::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(1),
        'precio' => rand(100, 1000),
        'compra_id' => function (){
            return factory(Compra::class)->create()->id;
        },
        'categoria_id' => function (){
            return factory(Categoria::class)->create()->id;
        }
    ];
});
