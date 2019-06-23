<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GarbageOfficersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i<5; $i++) {
        //    $faker = Faker::create('id_ID'); 
        //    DB::table ('GarbageOfficersTableSeeder')->insert([
        //        'email'=>$faker->email,
        //       'name'=>$faker->name,
        //       'address'=>$faker->address,
        //        'phonenumber'=>$faker->phonenumber,
        //        'password'=>hash::make('password'),
        //        'savingId'=>1
        //    ]);   
        // }
        DB::table('garbage_officers')->insert([
            'name' => 'Petugas Bank Sampah',
            'email' => 'petugas@samkuriang.com',
            'email_verified_at' => '2019-03-11 12:25:00',
            'password' => Hash::make('petugas123'),
            'address' => 'Jalan Petugas No. 01',
            'phone_number' => '082112078019',
            'lat' => -6.397048,
            'lng' => 106.841577,
            'place_name' => 'asd'
        ]);
    }
}
