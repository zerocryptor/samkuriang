<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;



class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $faker = Faker::create('id_ID');
        for ($i=0; $i<5 ; $i++) {
            DB::table ('admins')->insert([
                'username' => $faker->userName,
                'password' => Hash::make('admin'),
                'db_user' => 1
            ]);
        }
=======
        // $faker = Faker::create('id_ID');
        // for ($i=0; $i<5 ; $i++) {
        //     DB::table ('AdminsTableSeeder')->insert([
        //         'username' => $faker->userName,
        //         'password' => Hash::make('admin'),
        //         'db_user' => 1
        //     ]);
        // }

        DB::table('admins')->insert([
            'name' => 'Admin Samkuriang',
            'email' => 'admin@samkuriang.com',
            'password' => Hash::make('admin_samkuriang'),
            'address' => 'Jalan Admin No. 12',
            'phone_number' => '08957271637'
        ]);
>>>>>>> e8093d2317749452d5d1720d12273eb8efb2a890
    }
}