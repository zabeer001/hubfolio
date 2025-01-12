<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        Author::create([
            'name' => 'John Doe',
            'bio' => 'John is a passionate writer on technology.',
            'image' => 'john_doe_image.jpg',  // Example placeholder
        ]);

        Author::create([
            'name' => 'Jane Smith',
            'bio' => 'Jane is an expert in health and wellness.',
            'image' => 'jane_smith_image.jpg',  // Example placeholder
        ]);
    }
}

