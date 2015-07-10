<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->truncate();

        $data = [
            ['title' => 'Amazon Fire Phone, 32GB', 'price' => 179.00, 'stock' => 100],
            ['title' => 'Samsung GT-I8200 Galaxy S III 3 (White)', 'price' => 119.00, 'stock' => 20],
            ['title' => 'BLU Studio 5.0 II (Black)', 'price' => 175.00, 'stock' => 0],
            ['title' => 'ASUS ZenFone 2 5.5-Inch 16 GB (Black)', 'price' => 199.00, 'stock' => 23],
            ['title' => 'BLU Advance 4.0 (White)', 'price' => 68.69, 'stock' => 0],
            ['title' => 'Samsung Galaxy S5 SM-G900H 16GB (Black)', 'price' => 389.50, 'stock' => 10],
            ['title' => 'BLU Star 4.5 Design Edition Global (Black)', 'price' => 79.99, 'stock' => 0],
            ['title' => 'Apple iPhone 6, Gold, 64 GB', 'price' => 825.95, 'stock' => 15],
            ['title' => 'Samsung Galaxy S6 SM-G920F 32GB', 'price' => 623.00, 'stock' => 10],
            ['title' => 'Apple iPhone 5, Black 16GB', 'price' => 385.00, 'stock' => 10],
            ['title' => 'Apple iPhone 4, Black 8GB', 'price' => 117.56, 'stock' => 5],
            ['title' => 'Apple iPhone 6, Gold, 16 GB', 'price' => 710.68, 'stock' => 30],
            ['title' => 'Nokia Lumia 635 8GB (White)', 'price' => 72.00, 'stock' => 17],
            ['title' => 'Apple iPhone 5s, Space Gray 16GB', 'price' => 525.00, 'stock' => 30],
            ['title' => 'Samsung Galaxy S3 Mini GT-i8200 (White)', 'price' => 126.87, 'stock' => 40],
        ];

        DB::table('products')->insert($data);
    }
}
