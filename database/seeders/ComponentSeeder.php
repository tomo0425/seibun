<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('components')->insert([
            'name' => 'ギャバ',
            'effect' => 'GABA（ギャバ）とはアミノ酸の一種で、ストレスを軽減させる効果やリラックス効果があることで近年注目されている成分です。脳内の興奮を鎮め、平常心を保つ手助けをしてくれる癒しの存在です。また、血圧降下作用もあることから、高血圧から引き起こされる脳卒中などの予防にも働きかけます。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);    
        
    }
}
