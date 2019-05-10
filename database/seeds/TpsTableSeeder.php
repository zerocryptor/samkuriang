<?php

use Illuminate\Database\Seeder;

class TpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < ; $i++) { 
            DB::table('TpsTableSeeder')->insert[(
                'name'=>$faker->name,
                'address'=>$faker->address,
                'phonenumber'=>$faker->phonenumber
            )]
        }
    }
}
