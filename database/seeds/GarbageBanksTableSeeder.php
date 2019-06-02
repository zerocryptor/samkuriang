<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GarbageBanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i < 5 ; $i++) {
        //     DB::table ('garbage_banks')->insert([
        //         'id' => $i+1,
        //         'name'=>$faker->name,
        //         'latitude'=>latitude($min = -90, $max = 90),
        //         'longitude'=>longitude($min = -180, $max = 180),
        //         'address'=>$faker->address,
        //         'contact'=>$faker->contact,
        //         // 'garbage_price'=>1,
        //         // 'garbage_officer_id'=>1
        //     ]);
        // }
        DB::table('garbage_banks')->insert([
            'id' => 1,
            'name'=> 'Garbage Bank Depok',
            'latitude'=> -6.397048,
            'longitude'=> 106.841577,
            'address'=> 'Jl. Merdeka No.3, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411',
            'contact'=> '0813-1086-2475',
            'created_by' => 'admin'
            // 'garbage_price'=>1,
            // 'garbage_officer_id'=>1
        ]);
    }
} 
