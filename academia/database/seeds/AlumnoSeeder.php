<?php

use App\Alumno;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('alumnos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(Alumno::class,20)->create();
    }
}
