<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->faker->word; // Generate a random word for the name

        return [
            'name' => $name,
            'slug' => Str::slug($name), // Use the $name variable to generate the slug
        ];
    }
}
