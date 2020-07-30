<?php

use Illuminate\Database\Seeder;

class AdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adverts')->insert([
            'advert_types_id' => \App\AdvertTypes::FOOTER_ADVERT,
            'title' => 'Footer ads',
            'link' =>  '#',
            'file_hash' => '2SrDbm4aCEnRO0VQcIWfy40wErfBX9rHgal3474j/3502584.png',//path
            'file_name' => '3502584.png',
            'file_ext' =>'png',
            'file_mime' =>  'image/png',
            'file_size' =>  null,
        ]);


        DB::table('adverts')->insert([
            'advert_types_id' => \App\AdvertTypes::HEADER_ADVERT,
            'title' => 'Header ads',
            'link' =>  '#',
            'file_hash' => '2SrDbm4aCEnRO0VQcIWfy40wErfBX9rHgal3474j/755121.png',//path
            'file_name' => '755121.png',
            'file_ext' =>'png',
            'file_mime' =>  'image/png',
            'file_size' =>  null,
        ]);



        for($i=0;$i<=10;$i++){
            DB::table('adverts')->insert([
                'advert_types_id' => \App\AdvertTypes::MAIN_BLOCK_ADVERT,
                'title' => 'main block ads',
                'link' =>  '#',
                'file_hash' => '2SrDbm4aCEnRO0VQcIWfy40wErfBX9rHgal3474j/4173986.png',//path
                'file_name' => '4173986.png',
                'file_ext' =>'png',
                'file_mime' =>  'image/png',
                'file_size' =>  null,
            ]);
            DB::table('adverts')->insert([
                'advert_types_id' => \App\AdvertTypes::MAIN_BLOCK_ADVERT,
                'title' => 'main block ads',
                'link' =>  '#',
                'file_hash' => '2SrDbm4aCEnRO0VQcIWfy40wErfBX9rHgal3474j/3605279.png',//path
                'file_name' => '3605279.png',
                'file_ext' =>'png',
                'file_mime' =>  'image/png',
                'file_size' =>  null,
            ]);

            DB::table('adverts')->insert([
                'advert_types_id' => \App\AdvertTypes::MAIN_BLOCK_ADVERT,
                'title' => 'main block ads',
                'link' =>  '#',
                'file_hash' => '2SrDbm4aCEnRO0VQcIWfy40wErfBX9rHgal3474j/1020998.png',//path
                'file_name' => '1020998.png',
                'file_ext' =>'png',
                'file_mime' =>  'image/png',
                'file_size' =>  null,
            ]);

            DB::table('adverts')->insert([
                'advert_types_id' => \App\AdvertTypes::MAIN_BLOCK_ADVERT,
                'title' => 'main block ads',
                'link' =>  '#',
                'file_hash' => '2SrDbm4aCEnRO0VQcIWfy40wErfBX9rHgal3474j/6371637.png',//path
                'file_name' => '1020998.png',
                'file_ext' =>'png',
                'file_mime' =>  'image/png',
                'file_size' =>  null,
            ]);

        }


    }
}
