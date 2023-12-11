<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Category::create([
            'name' => 'Hasil Laut',
        ]);
        Category::create([
            'name' => 'Penyewaan & Jasa',
        ]);
        Category::create([
            'name' => 'Kreasi Kuliner',
        ]);
    }
}
