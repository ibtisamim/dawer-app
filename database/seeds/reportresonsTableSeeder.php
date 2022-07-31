<?php

use Illuminate\Database\Seeder;
use App\ReportingReason;

class reportresonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ReportingReason
		if (ReportingReason::count() == 0) {
            ReportingReason::create([
                'reason_text' => 'محتال' ,
                'source' => 'User',
                'status'=> 'Active',
                'id' => 1
            ]);


             ReportingReason::create([
               'reason_text' => 'تواصل غير لائق' ,
                'source' => 'User',
                'status'=> 'Active',
                'id' => 2
            ]);

			ReportingReason::create([
               'reason_text' => 'اعلانات مخالفه' ,
                'source' => 'User',
                'status'=> 'Active',
                'id' => 3
            ]);

			ReportingReason::create([
               'reason_text' => 'اعلانات مباعه' ,
                'source' => 'User',
                'status'=> 'Active',
                'id' => 4
            ]);


			ReportingReason::create([
               'reason_text' => 'اعلانات مخله بالآداب' ,
                'source' => 'User',
                'status'=> 'Active',
                'id' => 5
            ]);


			ReportingReason::create([
               'reason_text' => 'أخرى' ,
                'source' => 'User',
                'status'=> 'Active',
                'id' => 6
            ]);
        }

    }
}
