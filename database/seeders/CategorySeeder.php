<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $json = File::get("database/data/categories.json");
        $categories = json_decode($json);

        foreach ($categories as $category) {
            Category::create([
                'name' => $category->name,
                'icon' => $category->icon
            ]);
        }
    }
}
