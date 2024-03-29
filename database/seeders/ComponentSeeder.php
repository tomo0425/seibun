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
            'name' => 'ギャバ(GABA)',
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
            'effect' => 'ナイアシンアミドは、ビタミン B3と呼ばれるビタミンB群の一種。ニコチン酸アミドとも呼ばれています。水に 溶けやすい水溶性の性質を持ち、化粧水や美容液などさまざまなタイプの化粧品に配合されている成分です。',
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
        
        DB::table('components')->insert([
            'name' => 'カフェイン',
            'effect' => 'カフェインは、天然由来の有機化合物であるアルカロイドの一種になります。カフェインはキサンチンの誘導体とよばれる物質に分類され、実はキサンチン誘導体は、お薬にも活用されています。例えば気管支喘息やCOPDなどで使われるテオフィリンは、キサンチン誘導体のひとつになります。中枢神経刺激作用があり、覚醒作用や強心作用があります。さらには脳血管収縮作用や利尿作用も認めます。このことは、コーヒを飲まれている方ならば、体感している作用かと思います。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'マルトデキストリン',
            'effect' => 'マルトデキストリンは、一般的には安全な食品添加物として認められており、多くの加工製品に含まれています。また、総炭水化物数の一部として食物の栄養価表示の中に含まれています。ある食事ガイドラインでは、炭水化物は総カロリーの40から65％を上回らないようにすることが良いとされています。理想的には摂取する炭水化物は血糖値を急激に上げるものではなく、繊維に多く含まれる複合炭水化物が望ましいと考えられています。もし、糖尿病やインシュリンへの抵抗を持っている場合、または主治医が低炭水化物ダイエットを推奨した場合には、一日の総炭水化物数の中にマルトデキストリンが含まれることが望ましい可能性があります。ただし、マルトデキストリンは食品の中には少ししか存在しておらず、炭水化物摂取量全体には大きな影響はありません。マルトデキストリンは、血糖指数(GI)が高いために、血糖値の急上昇を起こす可能性があります。そのため、少量の摂取は問題ありませんが、糖尿病の人は特に注意する必要があります主に低GI食品で構成される食事は、糖尿病の人だけでなく多くの人に有益であると考えられています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'デキストリン',
            'effect' => 'デキストリンとは消化しにくい水溶性の食物繊維であり、摂取する事で5つの効果があります。糖の吸収スピードを遅らせ（食後の血糖値の上昇抑制）、整腸作用があり、脂肪の吸収スピードを遅らせ（食後の中性脂肪値の上昇抑制）、内蔵脂肪の低減作用があり、ミネラル吸収の促進作用があるなどです。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'ドロマイト',
            'effect' => 'ドロマイトは日本では「苦灰石」とよばれる天然の鉱物。主成分は炭酸カルシウムと炭酸マ���ネシウムです。ドロマイトは、石灰石が取れる山のふもとであれば、世界中どこでも採取することができます。日本でも北海道から沖縄までどこでも取れますが、栃木県佐野市で多く採掘されているようです。天然の鉱物であるドロマイトには、鉛・カドミウム・水銀などの人体に有害な重金属が含まれている可能性があります。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('components')->insert([
            'name' => 'スクラロース',
            'effect' => '砂糖を原料に作られた高甘味度甘味料であり、砂糖の約600倍の甘味を有します。 甘味質は砂糖によく似ており、糖類やカロリーを抑えた食品の開発を可能にします。また、フレーバーリリースの改善や不快な風味のマスキングなどさまざまな効果を発揮します。 水に溶けやすく、長期保存や加熱などにも安定なため、幅広い食品に活用できます。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'イソロイシン',
            'effect' => 'イソロイシンは必須アミノ酸の1つであり、血糖値の上昇のなく骨格筋への血中グルコースの取り込み促進、肝臓での糖新生抑制、グルコースの酸化的利用の促進などの効果があります。 成長を促進し神経機能をサポートするほか、肝臓の機能強化、血管拡張作用、筋肉強化、疲労回復などのはたらきがあることもわかっています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'イノシトール',
            'effect' => 'イノシトールは、筋肉や神経細胞に多く存在している栄養素で、以前はビタミンB群の仲間として扱われていましたが、体内でも生合成でき欠乏症もないため、現在はビタミン様物質として扱われています。水溶性で穀物や果物などの食品に多く含まれ、脂肪肝や動脈硬化の予防から神経細胞の働きを助ける作用まで幅広い働きを持っています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'βカロテン',
            'effect' => 'βカロテンはビタミンAに変換されて作用することから、生体内では皮膚や粘膜の健康を維持したり、光刺激反応に重要な役割をしたり、様々な細胞の増殖や分化に寄与します。 また、ビタミンAとしての機能以外で、βカロテンは抗酸化作用および免疫賦活作用などがあることが報告されています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'ガラナ種子エキス',
            'effect' => 'この種子にはコーヒーの約3倍のカフェインやタンニンが含まれています。 これらをアルコール抽出したエキスには強壮効果、疲労回復効果、鎮痛、解熱などがあるとされ、サプリメントなどにも多く利用されています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'ローヤルゼリーエキス',
            'effect' => 'エイジングケア成分としても注目されています。 類パロチン・デセン酸・パントテン酸を含んでいるため、肌の新陳代謝を活発にします。 ハリと弾力のあるみずみずしい肌をつくり、肌の老化を抑える作用があります。 ニキビやシミ・毛穴・美白などへの美容効果があると言われています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'パントテン酸',
            'effect' => 'パントテン酸は水溶性ビタミンで、ビタミンB群の1種です。 エネルギー代謝に欠かせない栄養素であり、免疫抗体の合成、薬物の解毒作用、脂質の代謝を促すHDLコレステロールの増加、副腎皮質ホルモンの合成による抗ストレス作用とさまざまな働きがあります。 腸内細菌によって体内でもわずかに合成される栄養素です。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('components')->insert([
            'name' => 'グルタミン酸',
            'effect' => 'グルタミン酸には脳の機能を活性化する効果やアンモニアの解毒・利尿効果があり、筋肉や免疫力を強化するたんぱく質を構成する働きを持つため、人間の生命維持に大切な役割をしています。 また脳の興奮を鎮めるGABA（ギャバ）を生成する働きもあります。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'カゼイン',
            'effect' => 'カゼインには腸が収縮と弛緩を繰り返して腸の内容物を外に排出する「ぜん動運動」を抑制する効果があります。 「ぜん動運動が抑制される」というと何だか便秘になってしまいそうなイメージがありますが、ぜん動運動が抑制されることで食べ物が腸の中にいる時間が長くなるので、その分だけ栄養素の吸収が高まる可能性が期待できます。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'アスパルテーム',
            'effect' => '人工甘味料は砂糖よりもはるかに低カロリーで少量でも甘みが強いため、摂取カロリーが低減できること、食後の血糖値に影響を与えないことなどから、肥満や糖尿病をはじめとする生活習慣病の予防効果が期待されます。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'クチナシ色素',
            'effect' => 'クチナシ色素とは比較的安価に手に入れやすい天然色素であり、食品添加物としても使われています。同じような黄色の着色料としてサフランがありますが、サフランよりも低価格で豊富な色を作れることで重宝されている着色料です。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('components')->insert([
            'name' => 'pH調整剤',
            'effect' => 'pH調整剤は、食品を適切なpH領域に保つために使う食品添加物です。 pHはピーエッチまたはペーハーと読み、液体が酸性かアルカリ性かの度合いを表す数値です。 pH調整剤には、食品の品質安定、製造加工条件の改善、食品の色調安定、変色防止、保存料や酸化防止剤の効果を向上させて保存性を高める効果などがあります。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        
    }
}
