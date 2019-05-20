<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class votesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create('App\Votes');


			for($i=1; $i<=20; $i++ )

			{

        DB::table('votes')->insert([
           'user_id'=>$faker-> numberBetween($min = 1, $max = 50),
           'question_id'=>$faker-> numberBetween($min = 1, $max = 50),
           'reponse'=>$faker->randomElement(['pour', 'contre','abstension']),
           'created_at'=> \Carbon\Carbon::now(),
    	   'updated_at'=> \Carbon\Carbon::now(),



        ]); 
			}

    }
}
