<?php

use Illuminate\Database\Seeder;

class GarbageCatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('garbage_catalogs')->insert([
            'name' => "Botol Plastik",
            'age' => '10 tahun',
            'type' => 1,
            'background_images' => 'background_pisang.jpg',
            'description' => 'ini deskripsi tentang sampah botol plastik'
        ]);

        DB::table('garbage_catalogs')->insert([
            'name' => "Pisang",
            'age' => '5 Tahun',
            'type' => 1,
            'background_images' => 'background_pisang.jpg',
            'description' => 'ini deskripsi tentang sampah pisang'
        ]);


    }
}
