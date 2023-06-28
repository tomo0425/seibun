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
            'name' => 'L-テアニン',
            'effect' => 'L‐テアニンは、緑茶に多く含まれるアミノ酸の一種です。テアニンを摂取すると、脳がリラックス状態にあるときに出るα波（アルファ波）が増加し、リラックス・ストレス解消、集中力を高める効果があります。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);    
        
    }
}
