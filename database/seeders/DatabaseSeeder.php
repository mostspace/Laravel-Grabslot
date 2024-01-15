<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Region;
use App\Models\RegionArea;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed roles
        $adminRole = Role::factory()->create(['slug' => 'admin']);
        $userRole = Role::factory()->create(['slug' => 'user']);

        // Seed admins and attach roles
        User::factory(1)->create([
            'email' => 'admin@admin.com',
        ])->each(function ($user) use ($adminRole) {
            $user->roles()->attach($adminRole);
        });

        // Seed users and attach roles
        User::factory(50)->create()->each(function ($user) use ($userRole) {
            $user->roles()->attach($userRole);
        });

        // Seed region areas
        $regions = [
            '北海道・東北',
            '関東',
            '中部',
            '近畿',
            '中国・四国',
            '九州・沖縄',
        ];

        foreach($regions as $name) {
            RegionArea::factory()->create(['name' => $name]);
        }

        // Seed regions 
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
            Region::factory()->create([
                'name' => $name, 
                'area_id' =>$data['area_id'],
                'url' =>$data['url'],
            ]);
        }
    }
}
