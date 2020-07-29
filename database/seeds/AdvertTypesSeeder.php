<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advert_types')->insert([
            'name' => 'Реклама для шапки',
        ]);
        DB::table('advert_types')->insert([
            'name' =>'Реклама для главного блока',
        ]);
        DB::table('advert_types')->insert([
            'name' => 'Реклама для подвала',
        ]);
    }
}
