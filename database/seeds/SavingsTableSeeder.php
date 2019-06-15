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
                'size' => '5.6',
                'customer_id' => '1',
                'garbage_id' => '1',
                'garbage_bank_id' => '1'
            ]);

            DB::table ('savings')->insert([
                'price' => '13500',
                'size' => '2.2',
                'customer_id' => '1',
                'garbage_id' => '1',
                'garbage_bank_id' => '1'
            ]);

        // }
    }
}
