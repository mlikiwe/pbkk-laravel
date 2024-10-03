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
            'name'=> 'Information Technology',
            'slug'=> 'information-technology',
            'color' => 'blue'
        ]);

        Category::create([
            'name'=> 'Lifestyle',
            'slug'=> 'lifestyle',
            'color' => 'green'
        ]);

        Category::create([
            'name'=> 'Gaming',
            'slug'=> 'gaming',
            'color' => 'purple'
        ]);

        Category::create([
            'name'=> 'Social and Politics',
            'slug'=> 'social-and-politics',
            'color' => 'red'
        ]);

        Category::create([
            'name'=> 'Education',
            'slug'=> 'education',
            'color' => 'yellow'
        ]);
    }
}
