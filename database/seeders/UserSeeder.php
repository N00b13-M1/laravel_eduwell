<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('molengeek'),

        ]);
        DB::table('users')->insert([
            'name' => "Michael",
            'email' => "michael@gmail.com",
            'password' => Hash::make('molengeek'),
        ]);
        DB::table('users')->insert([
            'name' => "Gursel",
            'email' => "gursel@gmail.com",
            'password' => Hash::make('molengeek'),
        ]);
        DB::table('users')->insert([
            'name' => "Elias",
            'email' => "elias@gmail.com",
            'password' => Hash::make('molengeek'),
        ]);
    }
}
