<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralSetting::firstOrCreate([
            'system_name'   => 'Digital Spark',
            'general_alert' => 'banned',
            'address'       => 'بيت لحم',
            'phone'         => '0566907902',
            'photo'         => 'photo',
            'logo'          => 'logo',
        ]);
    }
}
