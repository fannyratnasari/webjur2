<?php

use Illuminate\Database\Seeder;
use App\Sarpras;
class SarprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sarpras::create([
            'nama' => 'Laboratorium Jaringan Komputer',
            'deskripsi' => '
            Lokasi : Gedung A7 Lantai 2
            Jam Buka : 07.00 WIB - 16.00 WIB
            Fasilitas : Ruang Belajar, Mikrotik dan WiFi',
            'foto' => 'labjarkom.jpg',
        ]);

        Sarpras::create([
            'nama' => 'Laboratorium Multimedia Kreatif',
            'deskripsi' => '
            Lokasi : Gedung A7 Lantai 2
            Jam Buka : 07.00 WIB - 20.00 WIB
            Fasilitas : Ruang Multimedia, Ruang Belajar dan WiFi',
            'foto' => 'labmmk.jpg',
        ]);

        Sarpras::create([
            'nama' => 'Laboratorium Rekayasa Perangkat Lunak',
            'deskripsi' => '
            Lokasi : Gedung A7 Lantai 2
            Jam Buka : 07.00 WIB - 16.00 WIB
            Fasilitas : Ruang Belajar dan WiFi',
            'foto' => 'labrpl.jpg',
        ]);

        Sarpras::create([
            'nama' => 'Laboratorium Sitem Informasi',
            'deskripsi' => '
            Lokasi : Gedung A7 Lantai 3
            Jam Buka : 07.00 WIB - 16.00 WIB
            Fasilitas : Ruang Belajar,Personal Computer dan WiFi',
            'foto' => 'labsi.jpg',
        ]);

        Sarpras::create([
            'nama' => 'Ruang Baca',
            'deskripsi' => '
            Lokasi : Gedung A1 Lantai 1
            Jam Buka : 07.00 WIB - 16.00 WIB
            Fasilitas : Tempat Membaca, Berbagai Buku',
            'foto' => 'ruangbaca.jpg',
        ]);
    }
}