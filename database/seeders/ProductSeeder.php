<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Iphone 10',
                'slug' => 'iphone-10',
                'description' => 'Téléphone de la marque Apple',
                'price' => 999,
                'stock' => 10,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Tee-shirt manches longues',
                'slug' => 'tee-shirt-longues',
                'description' => 'Tee-shirt longues',
                'price' => 19.99,
                'stock' => 28,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'Horloge',
                'slug' => 'horloge',
                'description' => 'Grande horloge décorative',
                'price' => 39,
                'stock' => 12,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name' => 'Ceinture en cuir',
                'slug' => 'ceinture-en-cuir',
                'description' => 'Ceinture en cuir de la marque Jack & Jones',
                'price' => 64.99,
                'stock' => 23,
                'active' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'name' => 'Machine à laver',
                'slug' => 'machine-a-laver',
                'description' => 'Machine à laver de la marque Bosch',
                'price' => 249.99,
                'stock' => 8,
                'active' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
