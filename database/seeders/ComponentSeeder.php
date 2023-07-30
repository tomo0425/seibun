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
            'name' => '高麗人参エキス',
            'effect' => '高麗人参の効能・効果には疲労回復，滋養強壮，病中病後の体力回復，虚弱体質の改善，低血圧症の改善，性機能の回復，皮膚病の改善，風邪予防，血流改善，抗酸化，がん，糖尿病の予防，更年期障害の緩和など様々な健康効果を持つとされている。 研究の進展とともに，いくつかの効果に関しては，薬理作用も報告されている。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);    
        
    }
}
