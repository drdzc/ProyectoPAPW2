<?php

use Illuminate\Database\Seeder;

class generoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genero')->insert([
          ['nombreGenero' => 'Acción',],
          ['nombreGenero' => 'Aventura',],
          ['nombreGenero' => 'Carreras',],
          ['nombreGenero' => 'Deportes',],
          ['nombreGenero' => 'Estrategia',],
          ['nombreGenero' => 'Mundo Abierto',],
          ['nombreGenero' => 'Musical',],
          ['nombreGenero' => 'Rol',],
          ['nombreGenero' => 'Simulación',],
          ['nombreGenero' => 'Shooter',],
          ['nombreGenero' => 'Survival',],
          ['nombreGenero' => 'Peleas',]
        ]);
    }
}
