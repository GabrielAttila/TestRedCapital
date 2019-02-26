<?php

use Illuminate\Database\Seeder;

class CompraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Compra::class, 20)->create();
    }
}
