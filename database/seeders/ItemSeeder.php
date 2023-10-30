<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name'=>'商品名1',
            'market_name'=>'○○商店',
            'allergy'=>'卵',
            'category_id'=>1,
            'item_image'=>'/Review/public/img/バターサンド.jpg',
            ]);
            DB::table('items')->insert([
            'name'=>'商品名2',
            'market_name'=>'○○製菓',
            'allergy'=>'小麦',
            'category_id'=>2,
            'item_image'=>'/Review/public/img/じゃこてん.jpg',
            ]);
    }
}