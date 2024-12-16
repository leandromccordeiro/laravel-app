<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Gera um user_id associado a um usuário criado via a factory do User
            'type' => $this->faker->randomElement(['personal', 'business', 'other']), // Gera um tipo aleatório (personal, business ou other)
            'document_number' => $this->faker->unique()->numerify('###########'), // Gera um número de documento único, com 11 dígitos
        ];
    }
}
