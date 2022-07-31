<?php

use Illuminate\Database\Seeder;
use App\UpgradePeriod;

class upgradetimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // days
          if (UpgradePeriod::count() == 0) {
            UpgradePeriod::create([
                'price' => '100',
                'days' => '60',
                'unlimited' => 0,
                'ads_available_count'       => '20',
                'upgrades_id'     => 1,

            ]);


             UpgradePeriod::create([
                      'price' => '100',
                'days' => '30',
                'unlimited' => 0,
                'ads_available_count'       => '10',
                'upgrades_id'     => 1,
                
            ]);
        }
    }
}
