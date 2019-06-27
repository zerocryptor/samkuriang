<?php

use Illuminate\Database\Seeder;

class GarbageTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('garbage_types')->insert([
            'name' => "Sampah Anorganik",
            'description' => "ini adalah deskripsi sampah anorganik"
        ]);

        DB::table('garbage_types')->insert([
            'name' => "Sampah Organik",
            'description' => "ini adalah deskripsi sampah organik"
        ]);
    }
}
