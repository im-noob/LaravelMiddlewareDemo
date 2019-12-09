<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'is_admin' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'is_admin' => 0,
        ]);
    }
}
