<?php

namespace Database\Seeders;

use App\Models\Treasurie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreasurieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Treasurie::firstOrCreate([
            'name'                  => 'الرئيسية',
            'is_master'             => '1',
            'last_isal_exhcange'    => '0',
            'last_isal_collect'     => '1',
            'active'                => '1',
        ]);
        Treasurie::firstOrCreate([
            'name'                  => 'كاشير 1',
            'is_master'             => '0',
            'last_isal_exhcange'    => '0',
            'last_isal_collect'     => '0',
            'active'                => '1',
        ]);
    }
}
