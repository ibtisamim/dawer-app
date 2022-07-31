<?php

use Illuminate\Database\Seeder;
use App\Currency;

class carenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           if (Currency::count() == 0) {
            Currency::create([
                'name' => 'دينار عراقي',
                'code' => 'د.ع',
            ]);


             Currency::create([
                'name' => 'دولار',
                'code' => '$',
            ]);
        }
    }
}
