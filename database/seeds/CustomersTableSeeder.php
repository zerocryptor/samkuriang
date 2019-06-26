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
        // DB::table('customers')->insert([
        //     'name' => 'User Samkuriang',
        //     'email' => 'user@samkuriang.com',
        //     'password' => Hash::make('user123'),
        //     'address' => 'Jalan User No. 12',
        //     'phone_number' => '08957271622',
        //     'garbage_officer_id' => 1
        // ]); 
        
        DB::table('customers')->insert([
            'name' => 'Second User Samkuriang',
            'email' => 'user2@samkuriang.com',
            'password' => Hash::make('user223'),
            'address' => 'Jalan User No. 11',
            'phone_number' => '08957271621',
            'garbage_officer_id' => 1
        ]);

        DB::table('customers')->insert([
            'name' => 'Third User Samkuriang',
            'email' => 'user33@samkuriang.com',
            'password' => Hash::make('user323'),
            'address' => 'Jalan User No. 13',
            'phone_number' => '08957271623',
            'garbage_officer_id' => 1
        ]);

        DB::table('customers')->insert([
            'name' => 'Fourth User Samkuriang',
            'email' => 'user4@samkuriang.com',
            'password' => Hash::make('user423'),
            'address' => 'Jalan User No. 14',
            'phone_number' => '08957271623',
            'garbage_officer_id' => 1
        ]);
    }
}
