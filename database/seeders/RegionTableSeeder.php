<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            '北海道' => ['url' => 'https://ana-slo.com/', 'area_id' => 1],
            '青森県' => ['url' => 'https://ana-slo.com/', 'area_id' => 1],
            '秋田県' => ['url' => 'https://ana-slo.com/', 'area_id' => 1],
            '山形県' => ['url' => 'https://ana-slo.com/', 'area_id' => 1],
            '岩手県' => ['url' => 'https://ana-slo.com/', 'area_id' => 1],
            '宮城県' => ['url' => 'https://ana-slo.com/', 'area_id' => 1],
            '福島県' => ['url' => 'https://ana-slo.com/', 'area_id' => 1],
            '東京都' => ['url' => 'https://ana-slo.com/', 'area_id' => 2],
            '神奈川県' => ['url' => 'https://ana-slo.com/', 'area_id' => 2],
            '埼玉県' => ['url' => 'https://ana-slo.com/', 'area_id' => 2],
            '千葉県' => ['url' => 'https://ana-slo.com/', 'area_id' => 2],
            '茨城県' => ['url' => 'https://ana-slo.com/', 'area_id' => 2],
            '栃木県' => ['url' => 'https://ana-slo.com/', 'area_id' => 2],
            '群馬県' => ['url' => 'https://ana-slo.com/', 'area_id' => 2],
            '愛知県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '岐阜県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '静岡県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '三重県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '新潟県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '山梨県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '長野県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '石川県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '富山県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '福井県' => ['url' => 'https://ana-slo.com/', 'area_id' => 3],
            '大阪府' => ['url' => 'https://ana-slo.com/', 'area_id' => 4],
            '兵庫県' => ['url' => 'https://ana-slo.com/', 'area_id' => 4],
            '京都府' => ['url' => 'https://ana-slo.com/', 'area_id' => 4],
            '滋賀県' => ['url' => 'https://ana-slo.com/', 'area_id' => 4],
            '奈良県' => ['url' => 'https://ana-slo.com/', 'area_id' => 4],
            '和歌山県' => ['url' => 'https://ana-slo.com/', 'area_id' => 4],
            '広島県' => ['url' => 'https://ana-slo.com/', 'area_id' => 5],
            '岡山県' => ['url' => 'https://ana-slo.com/', 'area_id' => 5],
            '鳥取県' => ['url' => 'https://ana-slo.com/', 'area_id' => 5],
            '島根県' => ['url' => 'https://ana-slo.com/', 'area_id' => 5],
            '山口県' => ['url' => 'https://ana-slo.com/', 'area_id' => 5],
            '香川県' => ['url' => 'https://ana-slo.com/', 'area_id' => 5],
            '徳島県' => ['url' => 'https://ana-slo.com/', 'area_id' => 5],
            '愛媛県' => ['url' => 'https://ana-slo.com/', 'area_id' => 5],
            '高知県' => ['url' => 'https://ana-slo.com/', 'area_id' => 5],
            '福岡県' => ['url' => 'https://ana-slo.com/', 'area_id' => 6],
            '佐賀県' => ['url' => 'https://ana-slo.com/', 'area_id' => 6],
            '長崎県' => ['url' => 'https://ana-slo.com/', 'area_id' => 6],
            '熊本県' => ['url' => 'https://ana-slo.com/', 'area_id' => 6],
            '大分県' => ['url' => 'https://ana-slo.com/', 'area_id' => 6],
            '宮崎県' => ['url' => 'https://ana-slo.com/', 'area_id' => 6],
            '鹿児島県' => ['url' => 'https://ana-slo.com/', 'area_id' => 6],
            '沖縄県' => ['url' => 'https://ana-slo.com/', 'area_id' => 6]
        ];

        foreach($cities as $name => $data) {
            \App\Models\Region::factory()->create([
                'name' => $name, 
                'area_id' =>$data['area_id'],
                'url' =>$data['url'],
            ]);
        }
    }
}
