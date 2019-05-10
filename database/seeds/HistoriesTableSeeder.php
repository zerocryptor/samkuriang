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
        for ($i=0; $i<5 ; $i++) {
            DB::table ('HistoriesTableSeeder')->insert([
                'user_id' => 1
            ]);
        }
    }
}
