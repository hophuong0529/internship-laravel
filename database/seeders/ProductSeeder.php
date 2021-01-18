<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['code' => '589001', 'name' => 'ÁO HOODIE OVERSIZE WEBAREBEARS', 'description' => 'CHẤT LIỆU DA CÁ', 'category_id' => 1, 'price' => 250000, 'is_top' => 0, 'on_sale' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['code' => '589002', 'name' => 'ÁO HOODIE OVERSIZE DAILY', 'description' => 'CHẤT LIỆU DA CÁ', 'category_id' => 1, 'price' => 250000, 'is_top' => 0, 'on_sale' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['code' => '590001', 'name' => 'QUẦN NỈ TÚI HỘP BO GẤU', 'description' => 'CHẤT LIỆU NỈ', 'category_id' => 2, 'price' => 180000, 'is_top' => 0, 'on_sale' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['code' => '590002', 'name' => 'QUẦN NỈ ESSENTIALS PANTS', 'description' => 'CHẤT LIỆU NỈ', 'category_id' => 2, 'price' => 180000, 'is_top' => 0, 'on_sale' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['code' => '591001', 'name' => 'SET BỘ NỈ CAO CỔ OVERSIZE YWH', 'description' => 'CHẤT LIỆU NỈ', 'category_id' => 3, 'price' => 350000, 'is_top' => 0, 'on_sale' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['code' => '592001', 'name' => 'KHĂN LEN J.L SCRAFT', 'description' => 'CHẤT LIỆU LEN', 'category_id' => 3, 'price' => 200000, 'is_top' => 0, 'on_sale' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
