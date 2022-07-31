<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (City::count() == 0) {
            City::create([
                'city_name' => 'بغداد',
                'pleace_id' => 'ChIJk0GnoGd_VxURLG-xo9Kp7Z',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 1,
            ]);


             City::create([
                'city_name' => 'دهوك',
                'pleace_id' => 'ChIJccW5-cmNCEARm8hYIcc4LvY',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 2,
            ]);


              City::create([
                'city_name' => 'اربيل',
                'pleace_id' => 'ChIJYTREE_4iB0AR0XnekTPWAT4',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 3,
            ]);


              City::create([
                'city_name' => 'صلاح الدين',
                'pleace_id' => 'ChIJ947hB9foBkARfTNzMeiONN4',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 4,
            ]);


              City::create([
                'city_name' => 'ديالى',
                'pleace_id' => 'ChIJ-dvcPnUcVhURD0U7JQfCHew',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 5,
            ]);



              City::create([
                'city_name' => 'الانبار',
                'pleace_id' => 'ChIJ3wjG1Ku_QxURvPyAOxGzELo',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 6,
            ]);



              City::create([
                'city_name' => 'واسط',
                'pleace_id' => 'ChIJc8yyLWuv4z8RlSMAnCWD_FE',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 7,
            ]);



              City::create([
                'city_name' => 'نينوى',
                'pleace_id' => 'ChIJv5VQ6KBkTRUR_D6jw8l-3kg',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 8,
            ]);


             City::create([
                'city_name' => 'بابل',
                'pleace_id' => 'ChIJBwq3TUmIjz8ROWoHow04Og8',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 9,
            ]);


             City::create([
                'city_name' => 'كربلاء',
                'pleace_id' => 'ChIJyc24R-FrWRUR8BGhrqraxfY',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 10,
            ]);


             City::create([
                'city_name' => 'النجف',
                'pleace_id' => 'ChIJYYJ6m6zQXhUR8LjhC-Suibk',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 11,
            ]);


              City::create([
                'city_name' => 'ميسان',
                'pleace_id' => 'ChIJO_NiRiL45z8RJTvRgr-bc7g',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 12,
            ]);


              City::create([
                'city_name' => 'السليمانيه',
                'pleace_id' => 'ChIJsUPRNgUsAEAR6l0hTg11kfc',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 13,
            ]);


               City::create([
                'city_name' => 'كركوك',
                'pleace_id' => 'ChIJye13RQPWVBURdaSdXFXEkFg',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 14,
            ]);


               City::create([
                'city_name' => 'الديوانيه',
                'pleace_id' => 'ChIJS2L_dcuoWBUR3NuA3cc9Ej0',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 15,
            ]);


               City::create([
                'city_name' => 'المثنى',
                'pleace_id' => 'ChIJ2SxFY2L3XxUR3GwZruEaZiE',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 16,
            ]);

               City::create([
                'city_name' => 'ذي قار',
                'pleace_id' => 'ChIJu66jJiPj3T8R0Mrqs1OUTVc',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 17,
            ]);


                City::create([
                'city_name' => 'البصره',
                'pleace_id' => 'ChIJNRUqhXGXxD8RENRLJycp0rg',
                'status'       => 'Active',
                'country_id'     => 1,
                'id' => 18,
            ]);
        }
    }
}
