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
            ['name' => 'Phuong', 'email' => 'hophuong0529@gmail.com', 'password' => '$2b$10$CiGxuuCND4Fnfm4rvkBYZe.3zm9aMZgDQzXqEuRdoRihe4Pc7l6di', 'is_admin' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], //123
            ['name' => 'Phap', 'email' => 'hophuong99@gmail.com', 'password' => '$2b$10$CiGxuuCND4Fnfm4rvkBYZe.3zm9aMZgDQzXqEuRdoRihe4Pc7l6di', 'is_admin' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
