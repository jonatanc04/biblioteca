<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Libro::class;
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'editorial' => $this->faker->sentence(2),
            'precio' => $this->faker->randomFloat(2, 5, 20)
        ];
    }
}
