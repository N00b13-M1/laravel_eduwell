<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "role"=> "admin",
            "description" => "add & elevate user,create, modify, read & delete",
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "role"=> "webmaster",
            "description" => "create, modify, read & delete",
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "role"=> "member",
            "description" => "create & read",
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "role"=> "superplop",
            "description" => "plopper",
            "created_at"=>now()
        ]);
    }
}
