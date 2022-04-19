<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("contacts")->insert([
            "adresse"=> "newcastle beach park playground",
            "phone" => "010-020-0340",
            "mobile"=>"090-080-0760"
        ]);
    }
}
