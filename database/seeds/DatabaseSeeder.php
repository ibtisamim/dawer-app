<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
       // $this->call(AreaSeeder::class);
        $this->call(TranslationsTableSeeder::class); 
       //  $this->call(upgradesTableSeeder::class);
     //   $this->call(upgradetimeTableSeeder::class);
      //  $this->call(carenciesTableSeeder::class);
     //   $this->call(statuslistTableSeeder::class);
       // $this->call(reportresonsTableSeeder::class);
         /*
         $this->call(StoreSeeder::class);
         $this->call(CountriesTableSeeder::class);
         $this->call(CitiesTableSeeder::class);

         $this->call(VoyagerDatabaseSeeder::class);
         $this->call(VoyagerDummyDatabaseSeeder::class);*/
    }
}
