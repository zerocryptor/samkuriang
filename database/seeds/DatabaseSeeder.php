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
<<<<<<< HEAD
        $this->call(UsersTableSeeder::class);
        $this->call(GarbageOfficersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
=======
        $this->call(GarbageOfficersTableSeeder::class);
        // $this->call(AdminsTableSeeder::class);
>>>>>>> 6740637f80466573a752fa11ce8cba6d0d4d789e
    }
}