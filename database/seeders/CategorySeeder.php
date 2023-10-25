<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'name' => 'Sweets',
         ]);
        DB::table('categories')->insert([
                'name' => 'Process goods',
         ]);
        DB::table('categories')->insert([
                'name' => 'drink',
         ]);
        DB::table('categories')->insert([
                'name' => 'Bread',
         ]);
        DB::table('categories')->insert([
                'name' => 'Noodles',
         ]);
        DB::table('categories')->insert([
                'name' => 'Spices',
         ]);
        DB::table('categories')->insert([
                'name' => 'Others',
         ]);
    }
}