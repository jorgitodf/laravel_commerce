<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();

        factory('CodeCommerce\User')->create([
            'name' => 'Jorgito da Silva Paiva',
            'email' => 'jorgitodf06@gmail.com',
            'password' => Hash::make(123456)
        ]);

        factory('CodeCommerce\User', 10)->create();

    }

}