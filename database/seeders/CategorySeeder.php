<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            "name"=> "Information Technology",
            "slug"=> "information-technology",
        ]);

        Category::create([
            "name"=> "Lifestyle",
            "slug"=> "lifestyle",
        ]);

        Category::create([
            "name"=> "Gaming",
            "slug"=> "gaming",
        ]);

        Category::create([
            "name"=> "Social and Politics",
            "slug"=> "social-and-politics",
        ]);

        Category::create([
            "name"=> "Education",
            "slug"=> "education",
        ]);
    }
}
