<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                'category' => 'Food',
                'slug' => 'food'
            ],
            [
                'category' => 'Travel',
                'slug' => 'travel'
            ],
            [
                'category' => 'Health',
                'slug' => 'health'
            ]
        ];

        foreach ($arr as $category) {
            Category::create($category);
        }
    }
}
