<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Author;  // Import the Author model
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Create 10 blogs
        for ($i = 0; $i < 10; $i++) {
            $blog = Blog::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph(5),
                'author_id' => Author::inRandomOrder()->first()->id,  // Randomly assign an author
                'image' => 'images/blog-placeholder.jpg',  // Replace with dynamic image uploading logic if needed  b
            ]);

            // Attach random categories to the blog
            $categories = Category::inRandomOrder()->take(2)->pluck('id');
            $blog->categories()->attach($categories);
        }
    }
}

