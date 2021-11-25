<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;




class SeederAlumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumno')->insert([
            'nombre' => Str::random(5),
            'telefono' => Str::random(5),
            'edad' => rand(1,100),
            'password' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'sexo' => Str::random(5),
        ]);
    }
}
