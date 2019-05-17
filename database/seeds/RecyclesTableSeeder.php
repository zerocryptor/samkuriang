<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RecyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5; $i++) {
            $faker = Faker::create('id_ID');  
            DB::table('recycles')->insert([
                'name'=>$faker->name,
                'type'=>$faker->type
            ]);
        }
    }
}
