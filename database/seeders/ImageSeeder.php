<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            ['path' => 'images/0001-1.jpg', 'product_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0001-2.jpg', 'product_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0001-3.jpg', 'product_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0002-1.jpg', 'product_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0002-2.jpg', 'product_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0002-3.jpg', 'product_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0003-1.jpg', 'product_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0003-2.jpg', 'product_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0003-3.jpg', 'product_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0004-1.jpg', 'product_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0004-2.jpg', 'product_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0004-3.jpg', 'product_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0005-1.jpg', 'product_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0005-2.jpg', 'product_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['path' => 'images/0005-3.jpg', 'product_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
