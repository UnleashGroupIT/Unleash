<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       factory(App\AgendaSessions::class, 50)->create();

    foreach(range(1, 50) as $index){
        DB::table('sessiontracks')->insert([
            'session_id' => $faker->unique()->numberBetween(1, 51),
            'track_id' => $faker->numberBetween(1, 7)
        ]);
    }

    for ($i=0; $i < 3; $i++) { 
        DB::table('sessiontracks')->insert([
            'session_id' => 10,
            'track_id' => $faker->numberBetween(1, 7)
        ]);
    }

    }
}
