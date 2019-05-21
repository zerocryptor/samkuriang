<?php

use Illuminate\Database\Seeder;

class zCustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'User Samkuriang',
            'email' => 'user@samkuriang.com',
            'password' => Hash::make('user123'),
            'address' => 'Jalan User No. 12',
            'phone_number' => '08957271622'
        ]); 

        DB::table('customers')->insert([
            'name' => 'User Samkuriang 2',
            'email' => 'user2@samkuriang.com',
            'password' => Hash::make('user1234'),
            'address' => 'Jalan User No. 32',
            'phone_number' => '08957271622'
        ]); 
    }
}
