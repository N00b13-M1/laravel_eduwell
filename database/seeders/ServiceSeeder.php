<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'logo' => 'service-icon-01.png',
            'title' => 'Useful Tricks',
            'description' => 'EduWell is the professional HTML5 template for your school or university websites.'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-02.png',
            'title' => 'Creative Ideas',
            'description' => 'You can download and use this EduWell Template for your teaching and learning stuffs.'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-03.png',
            'title' => 'Ready Target',
            'description' => 'Please tell your friends about the best CSS template website that is TemplateMo.'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-04.png',
            'title' => 'Technology',
            'description' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-01.png',
            'title' => 'Useful Tricks',
            'description' => 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-02.png',
            'title' => 'Creative Ideas',
            'description' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-03.png',
            'title' => 'Ready Target',
            'description' => 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-04.png',
            'title' => 'Technology',
            'description' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-01.png',
            'title' => 'Useful Tricks',
            'description' => 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-02.png',
            'title' => 'Creative Ideas',
            'description' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-03.png',
            'title' => 'Ready Target',
            'description' => 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.'
        ]);
        DB::table('services')->insert([
            'logo' => 'service-icon-04.png',
            'title' => 'Technology',
            'description' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.'
        ]);

    }
}