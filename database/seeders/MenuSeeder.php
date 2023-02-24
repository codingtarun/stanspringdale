<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categories = Category::all();
        $total_categories = $categories->count();

        foreach ($categories as $cat) {
            for ($i = 0; $i < rand($i, 10); $i++) {
                DB::table('menus')->insert([
                    'title' => $faker->word,
                    'description' => $faker->text($maxNbChars = 300),
                    'min_portion' => .5,
                    'max_portion' => rand(3, 10),
                    'price' => rand(50, 200),
                    'image' => 'image path here',
                    'status' => rand(1, 0),
                    'category_id' => rand(1, $total_categories),
                    'created_at' => now(),
                ]);
            }
        }
    }
}
