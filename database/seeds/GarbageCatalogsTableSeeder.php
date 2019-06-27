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
            'description' => 'Sampah botol plastik Sampah botol plastik merupakan bahan padat buangan dari kegiatan manusia yang sudah terpakai.Oleh karena itu pengelolaan sampah tidak terlepas dari gaya hidup masyarakat. Jika sampah tersebut terus dibiarkan, tentu akan menimbulkan dampak serius bagi lingkungan.',
            'garbage_type_id' => 1
        ]);

        DB::table('garbage_catalogs')->insert([
            'name' => "pisang",
            'age' => '5 Tahun',
            'background_images' => 'http://samkuriang.invicit.com/img/kulitpisang.png',
            'description' => 'Kulit pisang adalah kulit buah dari buah pisang. Sebagai salah satu buah yang populer di dunia dengan konsumsi mencapai 145 juta ton per tahun (2011), pisang menghasilkan sejumlah besar limbah. Kulit pisang digunakan sebagai pakan terutama di daerah di mana pisang tumbuh dan diolah. Kulit pisang digunakan sebagai pakan ternak sapi, kambing, babi, unggas, kelinci, dan ikan. Meski demikian, kandungan tannin dalam kulit pisang dikhawatirkan mengganggu pencernaan hewan ternak.Kulit pisang juga digunakan sebagai pemurnian air, produksi etanol, selulase, lakase, pengomposan hingga permen.',
            'garbage_type_id' => 2
        ]);

        DB::table('garbage_catalogs')->insert([
            'name' => "tutup botol",
            'age' => '5 Tahun',
            'background_images' => 'http://samkuriang.invicit.com/img/tutupbotol.png',
            'description' => 'Tutup botol plastik merupakan bagian dari sampah botol plastik yang merupakan bahan padat dari kegiatan manusia. Oleh karena itu pengelolaan sampah tidak terlepas dari gaya hidup masyarakat. Jika sampah tersebut terus dibiarkan, tentu akan menimbulkan dampak serius bagi lingkungan.',
            'garbage_type_id' => 1
        ]);




    }
}
