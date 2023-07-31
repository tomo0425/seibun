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
            'effect' => 'ヘンプシードには、便秘の予防・解消、整腸効果のある食物繊維と、便秘の改善に効果があるとされているマグ ネシウムが豊富に含まれています。 ヘンプシードに含まれる食物繊維のうち、約2割は水に溶けない性質をもつ不溶性食物繊維で、それが潤腸通便作用を促す働きがあります。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);  
        
        DB::table('components')->insert([
            'name' => 'ギャバ',
            'effect' => ' GABA（ギャバ）とはアミノ酸の一種で、ストレスを軽減させる効果やリラックス効果があることで近年注目され ている成分です。脳内の興奮を鎮め、平常心を保つ手助けをしてくれる癒しの存在です。また、血圧降下作用もあることから、高血圧から引き起こされる脳卒中などの予防にも働きかけます。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);  
        
        DB::table('components')->insert([
            'name' => 'アルギニン',
            'effect' => ' アルギニンは成長ホルモンの分泌や筋肉組織の増強、免疫力の向上に効果的なアミノ酸の一種です。また、アン モニアの解毒や血管の拡張による血流改善効果もあります。さらに、肌を保湿し新陳代謝を促すため、美肌づくりにも効果的です。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'ナイアシンアミド',
            'effect' => '| ナイアシンアミドは、ビタミン B3と呼ばれるビタミンB群の一種。ニコチン酸アミドとも呼ばれています。水に 溶けやすい水溶性の性質を持ち、化粧水や美容液などさまざまなタイプの化粧品に配合されている成分です。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'ナイアシン',
            'effect' => ' ナイアシンはビタミンB群のひとつです。糖質や脂質を燃やしてエネルギーを作り出すときや、二日酔いの原因となるアルコールを分解するときに働く「酵素」を助ける「補酵素」としての役割を担っています。皮膚や粘膜の健康維持を助けるほか、脳神経を正常に働かせる効果があります。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('components')->insert([
            'name' => 'ビタミンB6',
            'effect' => 'ビタミンB6はピリドキシンとも呼ばれるビタミンB群の一種で、たんぱく質の分解・合成を助け、皮膚や粘膜の健康維持に働きます。また、神経伝達物質の合成にも関わるため、精神状態の安定に役立ちます。ホルモンのバランスを整える働きもあり、女性の味方となるビタミンです。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'パントテン酸',
            'effect' => ' パントテン酸は水溶性ビタミンで、ビタミンB群の1種です。エネルギー代謝に欠かせない栄養素であり、免疫抗 体の合成、薬物の解毒作用、脂質の代謝を促すHDLコレステロールの増加、副腎皮質ホルモンの合成による抗ストレス作用とさまざまな働きがあります。 腸内細菌によって体内でもわずかに合成される栄養素です。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'ビタミンB12',
            'effect' => 'ビタミンB群の一種である“ビタミンB12”は「赤いビタミン」とも呼ばれ、血液を作る“造血作用”があるのが特徴です。 また末梢神経を構成する核酸やリン脂質を増加させる役割を持っており、神経を修復する作用もあります。 このことから眼精疲労や肩こり、神経痛の改善も期待でき、「末梢神経のビタミン」とも呼ばれます。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'ホップエキス',
            'effect' => ' ホップは、ビールの苦味、香り付けに用いられる植物としてよく知られていますが、薬用ハーブとしても優秀で す。ホップの苦味成分は食欲を増進させ、消化を促進させる力を持っています。イライラや不安、不眠を解消してくれる鎮静作用のほか、利尿作用、血圧改善などにも効果があるといわれています。最近では肥満抑制効果が認められ、注目度が高まっています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'カルニチン',
            'effect' => ' カルニチンは長鎖脂肪酸をミトコンドリア内に運搬し、酸化（燃焼）することでエネルギーを産生している。 さらにカルニチンは、生成された有毒な物質をミトコンドリアの外に運びだし、蓄積するのを防いでいる。 こういった重要な役割を担っていることから、 カルニチンは骨格筋や心筋に多く存在し、脂肪酸を燃料として利用している',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
    }
}
