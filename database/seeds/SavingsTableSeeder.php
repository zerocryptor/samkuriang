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
        // for ($i=0; $i<5 ; $i++) {
            DB::table ('savings')->insert([
                'price' => '125000',
                'size' => '10',
                'customer_id' => 1
            ]);

            DB::table ('savings')->insert([
                'price' => '13500',
                'size' => '110',
                'customer_id' => 1
            ]);

        // }
    }
}
