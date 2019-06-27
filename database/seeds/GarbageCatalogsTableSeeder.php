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
            'description' => 'sampah botol plastik merupakan limbah bahan buangan sisa kegiatan manusia yang keberadaannya bila tidak dikelola dengan baik akan menimbulkan berbagai macam dampak negative.'
        ]);

        DB::table('garbage_catalogs')->insert([
            'name' => "Pisang",
            'age' => '5 Tahun',
            'type' => 1,
            'background_images' => 'background_pisang.jpg',
            'description' => 'Kulit pisang adalah kulit buah dari buah pisang. Sebagai salah satu buah yang populer di dunia dengan konsumsi mencapai 145 juta ton per tahun (2011), pisang menghasilkan sejumlah besar limbah. Kulit pisang digunakan sebagai pakan terutama di daerah di mana pisang tumbuh dan diolah. Kulit pisang digunakan sebagai pakan ternak sapi, kambing, babi, unggas, kelinci, dan ikan. Meski demikian, kandungan tannin dalam kulit pisang dikhawatirkan mengganggu pencernaan hewan ternak.Kulit pisang juga digunakan sebagai pemurnian air,[6] produksi etanol, selulase, lakase, pengomposan hingga permen.'
        ]);


    }
}
