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
            'name' => 'ヘンプシードエキス',
            'effect' => 'ヘンプシードには、便秘の予防・解消、整腸効果のある食物繊維と、便秘の改善に効果があるとされているマグネシウムが豊富に含まれています。 ヘンプシードに含まれる食物繊維のうち、約2割は水に溶けない性質をもつ不溶性食物繊維で、それが潤腸通便作用を促す働きがあります。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);    
        
    }
}
