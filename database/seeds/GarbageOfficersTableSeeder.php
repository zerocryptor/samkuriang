<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GarbageOfficersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('garbage_officers')->insert([
            'name' => 'Sapardi',
            'email' => 'bs.sejahtera@gmail.com',
            'email_verified_at' => '2019-03-11 12:25:00',
            'password' => Hash::make('petugas-sejahtera'),
            'address' => 'Jalan Fatahillah II No.34, Tanah Baru, Kec.Beji, Kota Depok, Jawa Barat 16426, Indosia',
            'phone_number' => '082112078019',
            'lat' => -6.397048,
            'lng' => 106.841577,
            'place_name' => 'Sejahtera'
        ]);

        DB::table('garbage_officers')->insert([
            'name' => 'Hasibuan',
            'email' => 'aklihsb@gmail.com',
            'email_verified_at' => '2019-03-11 12:25:00',
            'password' => Hash::make('petugas-sejahtera'),
            'address' => 'Jalan Merdeka No.3 Kec. Sukmajaya, Kota Depok, 16411',
            'phone_number' => '082112078019',
            'lat' => -6.3972348,
            'lng' => 106.8393887,
            'place_name' => 'Sejahtera'
        ]);

        DB::table('garbage_officers')->insert([
            'name' => 'Kartini',
            'email' => 'kartini@gmail.com',
            'email_verified_at' => '2019-03-11 12:25:00',
            'password' => Hash::make('petugas-kartini'),
            'address' => 'Jalan Kartini No.9 RT.2/RW.9, Depok Kec. Pancoran Mas Kota Depok Jawa Barat 16431',
            'phone_number' => '082112078019',
            'lat' => -6.4043814,
            'lng' => 106.8168024,
            'place_name' => 'Kartini'
        ]);
    }
}
