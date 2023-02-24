<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Creating array of categories 
         */
        $categories = [
            [
                'title' => 'Breakfast',
                'description' => 'Breakfast morning meal',
                'status' => 0
            ],
            [
                'title' => 'Lunch',
                'description' => 'Lunch meal',
                'status' => 1
            ],
            [
                'title' => 'Snacks',
                'description' => 'Some healthy light snacks',
                'status' => 1
            ],
            [
                'title' => 'Dinner',
                'description' => 'Dinner meall',
                'status' => 0
            ],
            [
                'title' => 'Chinese',
                'description' => 'Spicy Chinese meal',
                'status' => 1
            ]

        ];
        DB::table('categories')->insert($categories);
    }
}
