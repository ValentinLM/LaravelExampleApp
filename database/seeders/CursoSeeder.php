<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Así se manda a llamar Factory para que se crea automaticamente.
        Curso::factory(20)->create();
        //Así se crea los datos de manera manual
        /*
        $curso = new Curso();

        $curso->name = "Laravel";
        $curso->descripcion = "El mejor framework del mundo";
        $curso->categoria = "Desarrollo web";

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = "Golang";
        $curso2->descripcion = "El mejor bakcend del mundo";
        $curso2->categoria = "Desarrollo backend";

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "Angular";
        $curso3->descripcion = "El mejor framework";
        $curso3->categoria = "Desarrollo web";

        $curso3->save();
        */
    }
}
