<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doan;
use Faker\Factory as Faker;

class DoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Doan::create([
                'name' => $faker->word(), // Tạo tên ngẫu nhiên
                'description' => $faker->sentence(), // Tạo mô tả ngẫu nhiên
                'price' => $faker->randomFloat(2, 100, 1000),
                'ngaytao' => $faker->date(),
            ]);
        }
    }
}
