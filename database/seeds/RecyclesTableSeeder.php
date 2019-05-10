<?php

use Illuminate\Database\Seeder;

class RecyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < ; $i++) { 
            DB::table('RecyclesTableSeeder')->insert[(
                'name'=>$faker->name,
                'type'=>$faker->type
            )];
        }
    }
}
