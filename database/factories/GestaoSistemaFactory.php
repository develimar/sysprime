<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GestaoSistema>
 */
class GestaoSistemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descricao' => fake()->text(20),
            'link' => fake()->text(10),
            'usuario' => fake()->text(10),
            'senha' => fake()->text(5)
        ];
    }
}
