<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(30),
            'color' => $this->faker->safeHexColor(),
            'user_id' => User::all()->random()
        ];
    }
}
