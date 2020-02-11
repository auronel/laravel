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

        Articulo::create([
            'nombre' => 'Disco SSD Samsung',
            'categoria' => 'Electrónica',
            'precio' => 60,
            'stock' => 100,
            'imagen' => 'img/articulos/default.jpg'
        ]);

        Articulo::create([
            'nombre' => 'Memoria RAM Hyperfury',
            'categoria' => 'Electrónica',
            'precio' => 50,
            'stock' => 120,
            'imagen' => 'img/articulos/default.jpg'
        ]);

        Articulo::create([
            'nombre' => 'Secador de pelo',
            'categoria' => 'Bazar',
            'precio' => 85,
            'stock' => 40,
            'imagen' => 'img/articulos/default.jpg'
        ]);

        Articulo::create([
            'nombre' => 'Sofá',
            'categoria' => 'Hogar',
            'precio' => 250.58,
            'stock' => 25,
            'imagen' => 'img/articulos/default.jpg'
        ]);
    }
}
