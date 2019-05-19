<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
             DB::table('customers')->insert([
            'name' => 'User Samkuriang',
            'email' => 'user@samkuriang.com',
            'password' => Hash::make('user123'),
            'address' => 'Jalan User No. 12',
            'phone_number' => '08957271622'
        ]); 
    }
}
