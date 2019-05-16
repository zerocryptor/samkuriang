<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5 ; $i++) {
            $faker = Faker::create('id_ID'); 
            DB::table('tps')->insert([
                'name'=>$faker->name,
                'address'=>$faker->address,
                'phonenumber'=>$faker->phonenumber
            ]);
        }
    }
}
