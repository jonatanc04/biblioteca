<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Autor;

class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Autor::class;
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'nacimiento'=>$this->faker->numberBetween(1950,1990)
        ];
    }
}
