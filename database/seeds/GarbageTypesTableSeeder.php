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
            'description' => "sampah yang dihasilkan dari bahan-bahan non-hayati, baik berupa produk sintetik maupun hasil proses teknologi pengolahan bahan tambang. Sampah anorganik ialah sampah yang dihasilkan dari bahan-bahan non hayati baik berupa produk sinterik maupun hasil prosses teknology pengelolahan bahan tambang atau sumber daya alam dan tidak dapat diuraikan oleh alam"
        ]);

        DB::table('garbage_types')->insert([
            'name' => "Sampah Organik",
            'description' => "barang yang dianggap sudah tidak terpakai dan dibuang oleh pemilik/pemakai sebelumnya, tetapi masih bisa dipakai kalau dikelola dengan prosedur yang benar."
        ]);
    }
}
