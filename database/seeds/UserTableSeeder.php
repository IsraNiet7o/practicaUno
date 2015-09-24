<?php

use practicaUno\Entities\User;
use Faker\Factory as Faker;
use Faker\Generator;

class UserTableSeeder extends BaseSeeder
{

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
                'first_name'    =>$faker->firstName($gender = null|'male'|'female'),
                'last_name'     =>$faker->lastName,
                'email'         =>$faker->email,
                'type'          =>'user',
                'password'      => bcrypt('123456') //bcrypt('isra') 
            ];
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
  
    }

    public function createAdmin()
    {
        $this->create([

            'first_name'        =>'Isra',
            'last_name'         =>'Nieto',
            'email'             =>'is@gmail.com',
            'type'              =>'admin',
            'password'          => bcrypt('isra') //bcrypt('isra')

        ]);
    }
}
