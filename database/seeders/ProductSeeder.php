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
        'name' => 'Mechanical Keyboard',
        'price' => 120.00,
        'stock' => 15
    ]);

    Product::create([
        'name' => 'Logitech Mouse',
        'price' => 50.00,
        'stock' => 40
    ]);
    }
}
