<?php

namespace Database\Seeders;


use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Product_imagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->insert([
            [
                'id' => 1,
                'img' => 'product/medium-size/traktor/cat_traktor_Solis_110.jpg',
                'product_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'img' => 'product/large-size/traktor/sp_traktor_Solis_110.jpg',
                'product_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'img' => 'product/medium-size/traktor/cat_traktor_Solis_90.jpg',
                'product_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'img' => 'product/large-size/traktor/sp_traktor_Solis_90.jpg',
                'product_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'img' => 'product/medium-size/traktor/cat_traktor_Solis_90_N.jpg',
                'product_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'img' => 'product/large-size/traktor/sp_traktor_Solis_90_N.jpg',
                'product_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_X804HK.jpg',
                'product_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_X804HK.jpg',
                'product_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_X804.jpg',
                'product_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_X804.jpg',
                'product_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_NLX804_1.jpg',
                'product_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_NLX804_1.jpg',
                'product_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_X904.jpg',
                'product_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_X904.jpg',
                'product_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_NLX904_1.jpg',
                'product_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_NLX904_1.jpg',
                'product_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 17,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_NLX954_1.jpg',
                'product_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_NLX954_1.jpg',
                'product_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_NLY1104.jpg',
                'product_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_NLY1104.jpg',
                'product_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 21,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_X1304.jpg',
                'product_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 22,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_X1304.jpg',
                'product_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 23,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_X1304_1.jpg',
                'product_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 24,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_X1304_1.jpg',
                'product_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 25,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_ELG1604.jpg',
                'product_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 26,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_ELG1604.jpg',
                'product_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 27,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_ELG1754.jpg',
                'product_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 28,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_ELG1754.jpg',
                'product_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 29,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_ELG1954.jpg',
                'product_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 30,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_ELG1954.jpg',
                'product_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 31,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_LX2404.jpg',
                'product_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 32,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_LX2404.jpg',
                'product_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 33,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_LP2604.jpg',
                'product_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_LP2604.jpg',
                'product_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 35,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_LP2804.jpg',
                'product_id' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 36,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_LP2804.jpg',
                'product_id' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 37,
                'img' => 'product/medium-size/traktor/cat_traktor_YTO_C1402.jpg',
                'product_id' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 38,
                'img' => 'product/large-size/traktor/sp_traktor_YTO_C1402.jpg',
                'product_id' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
