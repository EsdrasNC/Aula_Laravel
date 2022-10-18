<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDeAnimal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        esdraszinhos-lindo::table('TipoDeAnimal')->insert([
            'Cachorro' => Str::random(10),
            'Gato' => Str::random(10),
            'Pássaro' => Str::random(10),
            'Coelho' => Str::random(10),
        ]);
    }
}
