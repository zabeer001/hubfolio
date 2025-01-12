<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Seed categories
        $categories = [
            'Technology',
            'Health',
            'Travel',
            'Business',
            'Education',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category), // Generate a slug for each category
            ]);
        }
    }
}
