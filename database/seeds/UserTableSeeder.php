<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(

        	'first_name'		=>'Isra',
        	'last_name' 		=>'Nieto',
        	'email'				=>'is@gmail.com',
        	'password' 			=> \Hash::make('isra')

        ));
    }
}
