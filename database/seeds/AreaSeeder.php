<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Translation;
use App\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->areas();
    //    $this->areasTranslations();
       
    }


    private function areas(){
    	if (Area::count() == 0) {
            Area::create([
                'area_name' => 'ناحية زاويتة',
                'status' => 'Active',
                'country_id' => 1,
                'city_id' => 2,
                'id' => 1
            ]);

Area::create([
                'area_name' => 'ناحية مانكيش',
                'status' => 'Active',
                'country_id' => 1,
                'city_id' => 2,
                'id' => 2
            ]);


Area::create([
                'area_name' => 'قصاء زاخو',
                'status' => 'Active',
                'country_id' => 1,
                'city_id' => 2,
                'id' => 3
            ]);

Area::create([
                'area_name' => 'قضاء سميل',
                'status' => 'Active',
                'country_id' => 1,
                'city_id' => 2,
                'id' => 4
            ]);


Area::create([
                'area_name' => 'قضاء عمادية',
                'status' => 'Active',
                'country_id' => 1,
                'city_id' => 2,
                'id' => 5
            ]);

Area::create([
                'area_name' => 'قضاء بردرش',
                'status' => 'Active',
                'country_id' => 1,
                'city_id' => 2,
                'id' => 6
            ]);

Area::create([
                'area_name' => 'قضاء عقره',
                'status' => 'Active',
                'country_id' => 1,
                'city_id' => 2,
                'id' => 7
            ]);

Area::create([
                'area_name' => 'قضاءشيخان',
                'status' => 'Active',
                'country_id' => 1,
                'city_id' => 2,
                'id' => 8
            ]);
        }
    }

}
