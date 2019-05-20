<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create('App\Question');


			for($i=1; $i<=20; $i++ )

			{

        DB::table('questions')->insert([

           'questions'=>$faker->sentences($nb = 1, $asText = true),
           'categories'=>$faker->randomElement(['sport','politique','fashion','actualites']),
           'date_fin'=>$faker->date,
           'votesPour'=>$faker->numberBetween($min = 0, $max = 1000),
           'votesContre'=>$faker->numberBetween($min = 0, $max = 1000),
           'votesAbs'=>$faker->numberBetween($min = 0, $max = 1000),
           'total'=>$faker->numberBetween($min = 0, $max = 3000),
           'status'=>$faker->boolean,
           'created_at'=> \Carbon\Carbon::now(),
    	     'updated_at'=> \Carbon\Carbon::now(),

        ]);


     	}
    }
}
