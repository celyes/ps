<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Affection>
 */
class AffectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'package' => $this->faker->word,
            'ecosystem' => $this->faker->word,
            'introduced' => '0.1.0',
            'fixed' => '1.2.3',
        ];
    }
}
