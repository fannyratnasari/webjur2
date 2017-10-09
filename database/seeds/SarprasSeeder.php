<?php

use Illuminate\Database\Seeder;

class SarprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seeder::create([
            'nama' => 'Laboratorium Jaringan Komputer',
            'deskripsi' => '
            Lokasi : Gedung A7 Lantai 2
            Jam Buka : 07.00 WIB - 16.00 WIB
            Fasilitas : Ruang Belajar, Mikrotik dan WiFi',
            'foto' => 'labjarkom.jpg',
        ]);

        Seeder::create([
            'nama' => 'Laboratorium Multimedia Kreatif',
            'deskripsi' => '
            Lokasi : Gedung A7 Lantai 2
            Jam Buka : 07.00 WIB - 20.00 WIB
            Fasilitas : Ruang Multimedia, Ruang Belajar dan WiFi',
            'foto' => 'labmmk.jpg',
        ]);

        Seeder::create([
            'nama' => 'Laboratorium Rekayasa Perangkat Lunak',
            'deskripsi' => '
            Lokasi : Gedung A7 Lantai 2
            Jam Buka : 07.00 WIB - 16.00 WIB
            Fasilitas : Ruang Belajar dan WiFi',
            'foto' => 'labrpl.jpg',
        ]);

        Seeder::create([
            'nama' => 'Laboratorium Sitem Informasi',
            'deskripsi' => '
            Lokasi : Gedung A7 Lantai 3
            Jam Buka : 07.00 WIB - 16.00 WIB
            Fasilitas : Ruang Belajar,Personal Computer dan WiFi',
            'foto' => 'labsi.jpg',
        ]);

        Seeder::create([
            'nama' => 'Ruang Baca',
            'deskripsi' => '
            Lokasi : Gedung A1 Lantai 1
            Jam Buka : 07.00 WIB - 16.00 WIB
            Fasilitas : Tempat Membaca, Berbagai Buku',
            'foto' => 'ruangbaca.jpg',
        ]);
    }
}
