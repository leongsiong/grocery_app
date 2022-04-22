<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::truncate();

        Categories::create([
            'id'=>1,
            'description'=>'vegetable'
        ]);

        Categories::create([
            'id'=>2,
            'description'=>'fruits'
        ]);
        Categories::create([
            'id'=>3,
            'description'=>'canned food'
        ]);

        Categories::create([
            'id'=>4,
            'description'=>'seafood'
        ]);

    }
}
