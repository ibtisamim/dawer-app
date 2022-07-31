<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

use App\RateUser;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
                'mobile_number'  => '666666666',
                'verified'       => '0',
                'id'             => 1
            ]);


            $role = Role::where('name', 'user')->firstOrFail();

            User::create([
                'name'           => 'Ahmad khaleefah',
                'email'          => '999999999@dawer.com',
                'password'       => bcrypt('123123'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
                'mobile_number'  => '999999999',
                'verified'       => '0',
                'id'             => 2
            ]);


            RateUser::create([
                    "rate" => 0.0,
                    "rate_count" => 0,
                    "rate_count_1" => 0,
                    "rate_count_2" =>0 ,
                    "rate_count_3" => 0,
                    "rate_count_4" =>0 ,
                    "rate_count_5" => 0,
                    "user_id" => 2
            ]);
        }
    }
}
