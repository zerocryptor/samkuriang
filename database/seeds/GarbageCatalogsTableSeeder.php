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
            'name' => "botol plastik",
            'age' => '10 tahun',
            'background_images' => 'http://samkuriang.invicit.com/img/botolplastik.png',
            'description' => 'ini deskripsi tentang sampah botol plastik',
            'garbage_type_id' => 1
        ]);

        DB::table('garbage_catalogs')->insert([
            'name' => "pisang",
            'age' => '5 Tahun',
            'background_images' => 'http://samkuriang.invicit.com/img/kulitpisang.png',
            'description' => 'ini deskripsi tentang sampah pisang',
            'garbage_type_id' => 2
        ]);

        DB::table('garbage_catalogs')->insert([
            'name' => "tutup botol",
            'age' => '5 Tahun',
            'background_images' => 'http://samkuriang.invicit.com/img/tutupbotol.png',
            'description' => 'ini deskripsi tentang sampah pisang',
            'garbage_type_id' => 1
        ]);




    }
}
