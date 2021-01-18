<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Phuong', 'email' => 'hophuong0529@gmail.com', 'password' => 'e10adc3949ba59abbe56e057f20f883e', 'is_admin' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Phap', 'email' => 'hophuong99@gmail.com', 'password' => 'e10adc3949ba59abbe56e057f20f883e', 'is_admin' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
