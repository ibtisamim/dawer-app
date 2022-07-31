<?php

use Illuminate\Database\Seeder;
use App\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Store::count() == 0) {
            Store::create([
                'name'           => 'Deafult',
                'domain'          => 'http://dawer.com',
                'enabled'       => 1,
            ]);
        }
    }
}
