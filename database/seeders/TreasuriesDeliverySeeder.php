<?php

namespace Database\Seeders;

use App\Models\TreasuriesDelivery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreasuriesDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TreasuriesDelivery::firstOrCreate([
            'treasurie_id'                  => '2',
            'treasuries_can_delivery_id'    => '1',
        ]);
    }
}
