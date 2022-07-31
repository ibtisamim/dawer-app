<?php

use Illuminate\Database\Seeder;
use App\AdsStatus;
class statuslistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         // Active - in active - expire - deleted - pending  - featured 

    	    if (AdsStatus::count() == 0) {
            AdsStatus::create([
                'title' => 'Active',
                
            ]);


             AdsStatus::create([
                 'title' => 'In Active',
            ]);


              AdsStatus::create([
                 'title' => 'Expire',
            ]);

             AdsStatus::create([
                 'title' => 'Deleted',
            ]);

             AdsStatus::create([
                 'title' => 'Pending',
            ]);

              AdsStatus::create([
                 'title' => 'Featured',
            ]);
        }
    }
}
