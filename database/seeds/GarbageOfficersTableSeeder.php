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
<<<<<<< HEAD
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
            'password' => Hash::make('petugas123'),
            'address' => 'Jalan Petugas No. 01',
            'phone_number' => '082112078019'
        ]);
=======
        for ($i=0; $i<5; $i++) {
            $faker = Faker::create('id_ID'); 
            DB::table ('garbage_officers')->insert([
                'email'=>$faker->email,
                'name'=>$faker->name,
                'address'=>$faker->address,
                'phonenumber'=>$faker->phonenumber,
                'password'=>hash::make('password')
            ]);
        }
>>>>>>> 6740637f80466573a752fa11ce8cba6d0d4d789e
    }
}
