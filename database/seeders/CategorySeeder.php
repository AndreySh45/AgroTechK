<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
            'id' => 1,
            'title' => 'Тракторы',
            'slug' => 'traktors',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ],
            [
            'id' => 2,
            'title' => 'Комбайны',
            'slug' => 'kombains',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ],
            [
            'id' => 3,
            'title' => 'Навигационные системы',
            'slug' => 'navsystem',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
    }
}
