<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();//También podemos llamar factory desde aquí en caso de que no sea necesario usar seeders
        $this->call(CursoSeeder::class);//Así se llama CursoSeeder.
        
    }
}
