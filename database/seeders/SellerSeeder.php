<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seller::create([
            'name' => 'Irwanda Andika',
            'address' => 'Bengkong Palapa 2 Blok X No 20',
            'phone_number' => '081298907655'
        ]);
        Seller::create([
            'name' => 'Kenzi Basmani Yahya',
            'address' => 'Villa Mas Blok Z No 34',
            'phone_number' => '081298907655'
        ]);
    }
}
