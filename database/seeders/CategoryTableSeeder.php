<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(15)->create();
    }
}
