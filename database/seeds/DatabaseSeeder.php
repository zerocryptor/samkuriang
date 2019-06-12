<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GarbageBanksTableSeeder::class);
        $this->call(GarbageOfficersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(SavingsTableSeeder::class);
        $this->call(HistoriesTableSeeder::class);
    }
}