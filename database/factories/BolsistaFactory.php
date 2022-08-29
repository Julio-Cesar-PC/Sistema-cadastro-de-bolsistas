<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bolsista>
 */
class BolsistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->unique()->postcode,
            'email' => $this->faker->unique()->safeEmail,
            'funcao' => $this->faker->jobTitle,
            'ativo' => $this->faker->boolean,
        ];
    }
}
