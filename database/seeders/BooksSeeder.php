<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //metodo spartano per generare tabelle random
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => fake()->words(rand(3, 10), true),
                'price' => rand(100, 350),
                'author' => fake()->name(),
                'img' => fake()->imageUrl(640, 480),
            ]);
        }
    }
}
