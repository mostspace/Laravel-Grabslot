<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            '北海道・東北',
            '関東',
            '中部',
            '近畿',
            '中国・四国',
            '九州・沖縄',
        ];

        foreach($regions as $name) {
            \App\Models\RegionArea::factory()->create(['name' => $name]);
        }
    }
}
