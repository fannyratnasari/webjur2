<?php

use Illuminate\Database\Seeder;
use App\Info;
class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kategori == true (beasiswa) == false (info)
        Info::create([
            'kategori' => 'true',
            'judul' => 'Beasiswa PPA 2017',
            'deskripsi' => 'Pada tahun 2017 UT menerima alokasi dana Beasiswa Peningkatan Prestasi Akademik (PPA) dari Pemerintah melalui Direktorat Pembelajaran dan Kemahasiswaan, Kemristekdikti, untuk diberikan kepada mahasiswa yang mempunyai prestasi tinggi. Ketentuan dan persyaratan Beasiswa PPA adalah sebagai berikut.
            Ketentuan:
            Calon penerima adalah mahasiswa yang aktif jenjang Sarjana dan Diploma IV
            Terbuka untuk seluruh mahasiswa (dalam dan luar negeri, guru dan non-guru)
            Persyaratan
            Mahasiswa paling rendah duduk pada semester III dan paling tinggi duduk pada semester VII;
            Mahasiswa registrasi secara terus menerus tanpa paket/semester tertinggal sampai dengan semester berjalan;
            Mahasiswa tidak pernah mengajukan alih kredit dan bukan mahasiswa AKPMM (FKIP);
            Tidak menerima beasiswa atau bantuan biaya pendidikan yang bersumber dari APBN/APBD/CSR atau sumber lainnya.',
            'foto' => 'ppa.jpg',
        ]);

        Info::create([
            'kategori' => 'true',
            'judul' => 'Beasiswa Bank Indonesia 2017',
            'deskripsi' => 'PEDOMAN BEASISWA BANK INDONESIA (BI) 2017
            1. SASARAN
            Beasiswa yang diberikan oleh Bank Indonesia bagi mahasiswa jenjang sarjana (SI) adalah program sosial berupa bantuan biaya kuliah kepada mahasiswa yang memiliki prestasi akademik dan aktivitas sosial kemasyarakatan.
            
            2. KRITERIA UMUM
            a.        Sekurang-kurangnya telah menyelesaikan 3 (tiga) semester dan atau telah menempuh 40 (empat puluh) satuan kredit semester (SKS).
            b.       Umur tidak lebih dari 23 (dua puluh tiga) tahun pada saat menerima beasiswa.
            c.        Tidak sedang menerima beasiswa dan atau berada dałam status ikatan dinas dari lembaga/instansi lain.
            d.       Mempunyai pengalaman menjalankan aktivitas sosial yang memiliki dampak kebermanfaatan bagi masyarakat.
            e.        Memperoleh rekomendasi dari pimpinan dan atau pejabat perguruan tinggi.
            f.        Bersedia untuk berperan aktif, mengelola dan mengembangkan Komunitas Generasi Baru Indonesia (GenBI) serta berpartisipasi pada semua kegiatan yang diselenggarakan oleh Bank Indonesia.
            g.       Pemberian beasiswa bersifat sosial tanpa ikatan dinas serta tidak dikaitkan dengan pelaksanaan seleksi penerimaan całon pegawai Bank Indonesia.
            h.       Apabila dałam masa pemberian beasiswa terdapat mahasiswa penerima beasiswa yang lulus dan atau mengalami penurunan akademik dibawah skala indeks yang ditentukan maka pihak Perguruan Tinggi Negeri harus mengajukan pengganti oleh mahasiswa lainnya yang memenuhi kriteria. Pengajuan penggantian mahasiswa penerima beasiswa tersebut harus disampaikan secara tertulis oleh pimpinan Perguruan Tinggi dan berlaku hingga berakhirnya waktu pemberian beasiswa.
            i.         Pelaksana program dapat memberikan persyaratan tambahan yang bertujuan untuk meningkatkan kualitas penerimaan, sepanjang tidak bertentangan dengan kriteria umum dan khusus yang telah ditetapkan oleh Bank Indonesia.
            j.         Pelaksana program berkewajiban mengelola database mahasiswa penerima beasiswa dan mentatausahakan dokumen penyaluran dana program.
            
            3. KRITERIA KHUSUS
            A.    BEASISWA REGULER
            a.       IPK minimal 3
            b.      Dari keluarga kurang mampu (pra sejahtera)
            c.       Membuat PERSONAL RESUME dan MOTIVATION LETTER
            
            B.     BESARAN DAN TAHAPAN PEMBAYARAN BEASISWA
            a. Untuk masing-masing mahasiswa sebesar RP. 750.000,-/bulan yang akan disalurkan setiap semester
            b.    Pembayaran beasiswa Tahap I berdasarkan .
            *IPK Semester Ganjil Tahun Ajaran 2016-2017 sebagai dasar pembayaran
            *Pembayaran kepada PTN dilakukan pada bulan April-Mei 2017
            c. Pembayaran beasiswa Tahap II berdasarkan
            *IPK Semester Genap Tahun Ajaran 2016-2017 sebagai dasar pembayaran
            *Pembayaran kepada PTN dilakukan pada bulan Oktober-Nopember 2017
            
            C. PRIORITAS PROGRAM STUDI
            a.       Manajemen/Pendidikan Ekonomi Manajemen
            b.      Akuntansi/Pendidikan Akuntansi
            c.       Ekonomi Islam/Ekonomi Syariah
            d.      Matematika/Pendidikan Matematika
            e.       Ilmu Hukum/Hukum Ekonomi Syariah
            f.       Komunikasi/llmu Komunikasi
            g.      Teknik Informatika
            h.      Sistem Informasi',
            'foto' => 'bi.jpg',
        ]);

        Info::create([
            'kategori' => 'true',
            'judul' => 'Beasiswa BCA Finance 2017',
            'deskripsi' => '
            Pendaftaran beasiswa periode 2017  : 20 Mei – 31 Juli 2017
            Pengumuman Tahap I               : 7 Agustus 2017
            Seleksi Tahap I                      : 8 Agustus – 31 Agustus 2017
            Pengumuman Akhir                  : 20 September 2017
            *Note : mohon diisi secara perlahan dan teliti. Kami TIDAK MENERIMA PERUBAHAN DATA apabila terjadi kesalahan (penulisan, pengisian, dll).
            
            Keterangan :
            
            Tahap I     : Penentuan Awal
            200 Calon pemenang yang terpilih pada tahap awal wajib mengirimkan dokumen yang dipersyaratkan kemudian
            Tahap II    : Penentuan Akhir
            Penentuan 100 pemenang beasiswa yang berhak menerima Rp 3.000.000 / semester
            
            Proses seleksi dilakukan oleh Tim Seleksi BCA Finance
            Keputusan hasil penerimaan adalah bersifat mutlak dan tidak dapat diganggu gugat serta kami tidak menerima surat menyurat dalam bentuk apapun selama proses dan setelah keputusan pemenang
            Keterangan lebih lanjut dapat diakses melalui website www.bcafinance.co.id
            
            Kualifikasi Penerima :
            §  Mahasiswa Strata 1 (S1) atau D4 segala jurusan
            §  Minimal telah/sedang menyelesaikan semester 2
            §  IPK Minimal : 3,00 (PTN) dan 3,40 (PTS)
            §  Tidak sedang menerima beasiswa dari pemberi beasiswa manapun',
            'foto' => 'BCA.jpg',
        ]);
        Info::create([
            'kategori'=>'false',
            'judul'=>'Kunjungan Kerja',
            'deskripsi' =>'Kunjungan kerja pada tahun 2016 dilakukan oleh Himpunan Mahasiswa Jurusan Teknik Informatika Universitas Negereri Surabaya
            yang berkunjung ke Fakultas Teknik Informatika Universitas Brawijaya Malang.',
            'foto'=> 'hmj.jpg'
        ]);
        Info::create([
            'kategori'=>'false',
            'judul'=>'Dialog Jurusan',
            'deskripsi' =>'Dialog Jurusan Teknik Informatika adalah kegiatan rutin yang dilaksanakan oleh Himpunan Mahasiswa Jurusan Teknik Informatika
            sebagai wadah perantara mahasiswa dan birokrasi mengenai segala peraturan maupun hal-hal yang berkaitan dengan Jurusan Teknik Informatika',
            'foto'=> 'dialog.jpg'
        ]);
        Info::create([
            'kategori'=>'false',
            'judul'=>'Informatic Champion',
            'deskripsi' =>'Informatic Champions merupakan lomba rutinan Jurusan Teknik Informatika. Informatic Champions
            atau disingkat IC merupakan wadah apresiasi Jurusan Teknik Informatika kepada kalangan mahasiswa yang berprestasi
            dalam bidang IT',
            'foto'=> 'masade.jpg'
        ]);
        Info::create([
            'kategori'=>'false',
            'judul'=>'Pekan Olahraga Jurusan',
            'deskripsi' =>'Pekan Olahraga Jurusan atau yang sering disebut dengan Porjur merupakan ajang perlombaan
            mengenai bakat mahasiswa Jurusan Teknik Informatika dibidang keolahragaan. Kegiatan ini merupakan
            Program Kerja Himpunan Mahasiswa Jurusan Teknik Informatika UNESA Departement Minat dan Bakat yang diselenggarakan
            setahun sekali',
            'foto'=> 'futsal.jpg'
        ]);
    }
}
