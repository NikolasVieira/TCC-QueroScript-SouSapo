<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Nikolas Admin',
            'nick' => 'Azalea',
            'email' => 'nikmap@hotmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'Nikolas Usuario',
            'nick' => 'Ricardo',
            'email' => 'nikmap@hotmail.com2',
            'password' => bcrypt('12345678'),
            'is_admin' => '0'
        ]);
    }
}
