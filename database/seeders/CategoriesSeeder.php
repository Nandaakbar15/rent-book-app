<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['comic', 'novel', 'manga'];

        foreach ($data as $value) {
            Categories::create([
                'name' => $value
            ]);
        }
    }
}
