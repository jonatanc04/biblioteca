<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;
use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autor = new Autor();
        $autor->nombre = "Juan Seeder";
        $autor->nacimiento = 1960;
        $autor->save();
        $libro = new Libro();
        $libro->titulo = "El libro del Seeder";
        $libro->editorial = "Seeder S.A.";
        $libro->precio = 10;
        $libro->autor()->associate($autor);
        $libro->save();
    }
}
