<?php

namespace Database\Seeders;

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
        DB::table('categories')->insert([
            [
                'name' => 'Électronique',
                'slug' => 'electronique',
                'description' => 'Produits électroniques',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vêtements',
                'slug' => 'vetements',
                'description' => 'Tee-shirts, pulls, jeans et pantalons',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maison',
                'slug' => 'maison',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Accessoires',
                'slug' => 'accessoires',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electroménager',
                'slug' => 'electromenager',
                'description' => 'Produits électroménagers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
