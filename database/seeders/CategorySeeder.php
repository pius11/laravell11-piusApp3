<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Category::create([
        'name'=>'web design',
        'slug'=> 'web_design'
    ]);
    Category::create([
        'name'=>'web developer',
        'slug'=> 'web_developer'
    ]);
    Category::create([
        'name'=>'web backend',
        'slug'=> 'web_bacend'
    ]);
    }
}
