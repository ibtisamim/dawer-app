<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Country::count() == 0) {
            Country::create([
                'country_name' => 'العراق',
                'country_code' => 'Iq',
                'status'       => 'Active',
                'store_id'     => 1,
                'id'           => 1
            ]);
        }
    }
}
