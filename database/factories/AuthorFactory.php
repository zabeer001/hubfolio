<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuthorFactory extends Factory
{
    protected $model = \App\Models\Author::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'bio' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(200, 200, 'people', true, 'Author'),
        ];
    }
}

