<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\User');


			for($i=1; $i<=20; $i++ )

			{

        DB::table('users')->insert([


           'name'=>$faker->firstName,
           'email'=>$faker->email,
           'password'=>$faker->password,
           'phone'=>$faker-> numberBetween($min = 20000000, $max = 99999999),
           'date_of_birth'=>$faker->date,
           'sexe'=>$faker-> randomElement(['male', 'famle']),
           'created_at'=> \Carbon\Carbon::now(),
    	   'updated_at'=> \Carbon\Carbon::now(),

        ]); 
			}
    }
}
