<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a default user for testing
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('admin1234'), // Set the password to 'admin1234'
        ]);

        // Create authors
        $authors = Author::factory(5)->create();

        // Create categories
        $categories = Category::factory(5)->create();

        // Create blogs and associate them with authors and categories
        Blog::factory(10)->create()->each(function ($blog) use ($authors, $categories) {
            $blog->author()->associate($authors->random()); // Assign a random author
            $blog->categories()->attach($categories->random(rand(1, 3))); // Attach 1 to 3 random categories
            $blog->save();
        });
    }
}
