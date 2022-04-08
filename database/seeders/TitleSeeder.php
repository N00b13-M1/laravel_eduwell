<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            'smallTitle' => 'Welcome To Our School',
            'bigTitle' => 'Best Place To Learn Graphic Design!',
            'buttontext' => 'JOIN US NOW!',
            'img' => 'banner-right-image.png'

        ]);
        DB::table('titles')->insert([
            'smallTitle' => 'OUR SERVICES',
            'bigTitle' => 'Provided Services!',
        ]);
        DB::table('titles')->insert([
            'smallTitle' => 'OUR COURSES',
            'bigTitle' => 'What You Can Learn!',
            'description' => 'You just think about TemplateMo whenever you need free CSS templates for your business website'
        ]);
        DB::table('titles')->insert([
            'smallTitle' => 'Get the sale right now!',
            'bigTitle' => 'Up to 50% OFF for 1+ courses',
            'description' => 'Kogi VHS freegan bicycle rights try-hard green juice probably haven\'t heard of them cliche la croix af chillwave.',
            'buttontext'=> 'VIEW COURSES',
            'img' => 'cta-left-image.png'
        ]);
        DB::table('titles')->insert([
            'smallTitle' => 'TESTIMONIALS',
            'bigTitle' => 'What They Think',
        ]);
    }
}
