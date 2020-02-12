<?php

use App\Articulo;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articulo::create([
            'nombre' => 'Disco duro Seagate',
            'categoria' => 'Electrónica',
            'precio' => 40,
            'stock' => 80,
            'imagen' => 'img/articulos/default.jpg'
        ]);
    }
}
