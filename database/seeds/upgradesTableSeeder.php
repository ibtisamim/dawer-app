<?php

use Illuminate\Database\Seeder;
use App\Upgrade;

class upgradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Upgrade::count() == 0) {
            Upgrade::create([
                'name' => 'العراق',
                'icon' => 'Iq',
                'desc' => '<p>حساب مجاني</p>',
                'status'       => 'Active',
                'store_id'     => 1,
                'id'           => 1
            ]);


             Upgrade::create([
                'name' => 'Dawer',
                'icon' => 'Dawer',
                'desc' => '<p>Account Dawer</p>',
                'status'       => 'Active',
                'store_id'     => 1,
                'id'           => 2
            ]);
        }
    }
}
