<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            'order_id' => 1,
            'products_id' => 5,
            'quantity' => 1,
            'unit_price' => 249.99,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
