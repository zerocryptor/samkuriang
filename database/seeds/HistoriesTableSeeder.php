<?php

use Illuminate\Database\Seeder;

class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ('historys')->insert([
            'customer_id' => 1 ,
            'savings_id' => 1
        ]);
    }
}
