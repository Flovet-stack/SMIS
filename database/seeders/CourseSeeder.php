<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'code' => 'ENG101',
            'title' => 'English Language',
            'description' => 'English fundermentals',
        ]);

        DB::table('courses')->insert([
            'code' => 'WEB101',
            'title' => 'Web Development',
            'description' => 'Intro to web dev',
        ]);

        DB::table('courses')->insert([
            'code' => 'DB101',
            'title' => 'Databaseseeder',
            'description' => 'Introduction to databases',
        ]);
    }
}
