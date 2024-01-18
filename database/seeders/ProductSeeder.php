<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'GSX-RR',
            'price' => 2000
        ]);

        Product::create([
            'name' => 'YZR-M1',
            'price' => 3500
        ]);

        Product::create([
            'name' => 'RC211V',
            'price' => 5000
        ]);
    }
}
