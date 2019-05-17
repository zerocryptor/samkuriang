<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Admin;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
       // $faker = Faker::create('id_ID');
       //  for ($i=0; $i<5 ; $i++) {
           // DB::table ('users')->insert([
           //     'name' => $faker->name,
           //     'email' => $faker->freeEmail,
           //     'password' => Hash::make('password'),
           //     'address' => $faker->address,
           //     'phone_number' => $faker->phoneNumber,
           //     'saving_id' => 1,
           //   'garbage_bank_id' => 1
           // ]);

           // }
             DB::table('users')->insert([
            'name' => 'Admin Samkuriang',
            'email' => 'admin@samkuriang.com',
            'password' => Hash::make('admin123'),
            'address' => 'Jalan Admin No. 12',
            'phone_number' => '08957271637'
        ]);
        
=======
        $faker = Faker::create('id_ID');
         for ($i=0; $i<5 ; $i++) {
            DB::table ('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => Hash::make('password'),
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
                // 'garbage_bank_id' => 1,
                'created_by' => 'Admin'
            ]);
        }
>>>>>>> 6740637f80466573a752fa11ce8cba6d0d4d789e
    }  
}
