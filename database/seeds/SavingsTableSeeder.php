<?php

use Illuminate\Database\Seeder;

class SavingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5 ; $i++) {
            DB::table ('SavingsTableSeeder')->insert([
                'garbage_id' => 1,
                'user_id' => 1
            ]);
        }
    }
}
