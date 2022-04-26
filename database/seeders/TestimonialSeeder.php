<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'testimonial' => "“just think about TemplateMo if you need free CSS templates for your website”",
            'name' => 'Catherine Walk',
            'position' => "CEO &amp; Founder" ,
            'user_id' => 1,
        ]);
        DB::table('testimonials')->insert([
            'testimonial' => "“think about our website first when you need free HTML templates for your website”",
            'name' => 'David Martin',
            'position' => "CTO of Tech Company" ,
            'user_id' => 3,
        ]);
        DB::table('testimonials')->insert([
            'testimonial' => "“just think about our website wherever you need free templates for your website”",
            'name' => 'Sophia Whity',
            'position' => "CEO and Co-Founder",
            'user_id' => 4,
        ]);
        DB::table('testimonials')->insert([
            'testimonial' => "“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”",
            'name' => 'Helen Shiny',
            'position' => "Tech Officer",
            'user_id' => 2,
        ]);
        DB::table('testimonials')->insert([
            'testimonial' => "“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”",
            'name' => 'George Soft',
            'position' => "Tech Officer",
            'user_id' => 4,
        ]);
        DB::table('testimonials')->insert([
            'testimonial' => "“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”",
            'name' => 'Andrew Hall',
            'position' => "Marketing Manager",
            'user_id' => 4,
        ]);
        DB::table('testimonials')->insert([
            'testimonial' => "“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”",
            'name' => 'Maxi Power',
            'position' => "Fashion Designer",
            'user_id' => 2,
        ]);
        DB::table('testimonials')->insert([
            'testimonial' => "“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”",
            'name' => 'Olivia Too',
            'position' => "Creative Designer",
            'user_id' => 1,
        ]);
    }
}
