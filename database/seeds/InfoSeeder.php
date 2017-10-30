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
            <br><strong>Ketentuan:</strong>
            <br> Calon penerima adalah mahasiswa yang aktif jenjang Sarjana dan Diploma IV
            <br>Terbuka untuk seluruh mahasiswa (dalam dan luar negeri, guru dan non-guru)
            <br><strong>Persyaratan</strong>
            <br>Mahasiswa paling rendah duduk pada semester III dan paling tinggi duduk pada semester VII;
            <br>Mahasiswa registrasi secara terus menerus tanpa paket/semester tertinggal sampai dengan semester berjalan;
            <br>Mahasiswa tidak pernah mengajukan alih kredit dan bukan mahasiswa AKPMM (FKIP);
            <br>Tidak menerima beasiswa atau bantuan biaya pendidikan yang bersumber dari APBN/APBD/CSR atau sumber lainnya.',
            'foto' => 'ppa.jpg',
        ]);

        Info::create([
            'kategori' => 'true',
            'judul' => 'Beasiswa Bank Indonesia 2017',
            'deskripsi' => 'PEDOMAN BEASISWA BANK INDONESIA (BI) 2017
            1. SASARAN
            <br>Beasiswa yang diberikan oleh Bank Indonesia bagi mahasiswa jenjang sarjana (SI) adalah program sosial berupa bantuan biaya kuliah kepada mahasiswa yang memiliki prestasi akademik dan aktivitas sosial kemasyarakatan.
            <br><br>
            2. KRITERIA UMUM
            <br> a.        Sekurang-kurangnya telah menyelesaikan 3 (tiga) semester dan atau telah menempuh 40 (empat puluh) satuan kredit semester (SKS).
            <br>b.       Umur tidak lebih dari 23 (dua puluh tiga) tahun pada saat menerima beasiswa.
            <br>c.        Tidak sedang menerima beasiswa dan atau berada dałam status ikatan dinas dari lembaga/instansi lain.
            <br>d.       Mempunyai pengalaman menjalankan aktivitas sosial yang memiliki dampak kebermanfaatan bagi masyarakat.
            <br>e.        Memperoleh rekomendasi dari pimpinan dan atau pejabat perguruan tinggi.
            <br>f.        Bersedia untuk berperan aktif, mengelola dan mengembangkan Komunitas Generasi Baru Indonesia (GenBI) serta berpartisipasi pada semua kegiatan yang diselenggarakan oleh Bank Indonesia.
            <br>g.       Pemberian beasiswa bersifat sosial tanpa ikatan dinas serta tidak dikaitkan dengan pelaksanaan seleksi penerimaan całon pegawai Bank Indonesia.
            <br>h.       Apabila dałam masa pemberian beasiswa terdapat mahasiswa penerima beasiswa yang lulus dan atau mengalami penurunan akademik dibawah skala indeks yang ditentukan maka pihak Perguruan Tinggi Negeri harus mengajukan pengganti oleh mahasiswa lainnya yang memenuhi kriteria. Pengajuan penggantian mahasiswa penerima beasiswa tersebut harus disampaikan secara tertulis oleh pimpinan Perguruan Tinggi dan berlaku hingga berakhirnya waktu pemberian beasiswa.
            <br>i.         Pelaksana program dapat memberikan persyaratan tambahan yang bertujuan untuk meningkatkan kualitas penerimaan, sepanjang tidak bertentangan dengan kriteria umum dan khusus yang telah ditetapkan oleh Bank Indonesia.
            <br>j.         Pelaksana program berkewajiban mengelola database mahasiswa penerima beasiswa dan mentatausahakan dokumen penyaluran dana program.
            <br><br>
            3. KRITERIA KHUSUS
            <br><strong>A.    BEASISWA REGULER</strong>
            <br>a.       IPK minimal 3
            <br>b.      Dari keluarga kurang mampu (pra sejahtera)
            <br>c.       Membuat PERSONAL RESUME dan MOTIVATION LETTER
            <br><br>
            <br><strong>B.     BESARAN DAN TAHAPAN PEMBAYARAN BEASISWA</strong>
            <br>a. Untuk masing-masing mahasiswa sebesar RP. 750.000,-/bulan yang akan disalurkan setiap semester
            <br><br>b.    Pembayaran beasiswa Tahap I berdasarkan .
            <br>*IPK Semester Ganjil Tahun Ajaran 2016-2017 sebagai dasar pembayaran
            <br>*Pembayaran kepada PTN dilakukan pada bulan April-Mei 2017
            <br><br>c. Pembayaran beasiswa Tahap II berdasarkan
            <br>*IPK Semester Genap Tahun Ajaran 2016-2017 sebagai dasar pembayaran
            <br>*Pembayaran kepada PTN dilakukan pada bulan Oktober-Nopember 2017
            <br>
            <strong>C. PRIORITAS PROGRAM STUDI</strong>
            <br>a.       Manajemen/Pendidikan Ekonomi Manajemen
            <br><br>b.      Akuntansi/Pendidikan Akuntansi
            <br><br>c.       Ekonomi Islam/Ekonomi Syariah
            <br><br>d.      Matematika/Pendidikan Matematika
            <br><br>e.       Ilmu Hukum/Hukum Ekonomi Syariah
            <br><br>f.       Komunikasi/llmu Komunikasi
            <br><br>g.      Teknik Informatika
            <br><br>h.      Sistem Informasi',
            'foto' => 'bi.jpg',
        ]);

        Info::create([
            'kategori' => 'true',
            'judul' => 'Beasiswa BCA Finance 2017',
            'deskripsi' => '
            <br>Pendaftaran beasiswa periode 2017  : 20 Mei – 31 Juli 2017
            <br>Pengumuman Tahap I               : 7 Agustus 2017
            <br>Seleksi Tahap I                      : 8 Agustus – 31 Agustus 2017
            <br>Pengumuman Akhir                  : 20 September 2017
            <br>*Note : mohon diisi secara perlahan dan teliti. Kami TIDAK MENERIMA PERUBAHAN DATA apabila terjadi kesalahan (penulisan, pengisian, dll).
            <br><br>
            Keterangan :
            <br><br>
            Tahap I     : Penentuan Awal
            <br>200 Calon pemenang yang terpilih pada tahap awal wajib mengirimkan dokumen yang dipersyaratkan kemudian
            <br><br>Tahap II    : Penentuan Akhir
            <br>Penentuan 100 pemenang beasiswa yang berhak menerima Rp 3.000.000 / semester
            <br><br>
            Proses seleksi dilakukan oleh Tim Seleksi BCA Finance
            <br>Keputusan hasil penerimaan adalah bersifat mutlak dan tidak dapat diganggu gugat serta kami tidak menerima surat menyurat dalam bentuk apapun selama proses dan setelah keputusan pemenang
            <br>Keterangan lebih lanjut dapat diakses melalui website www.bcafinance.co.id
            <br><br>
            Kualifikasi Penerima :
            <br>§  Mahasiswa Strata 1 (S1) atau D4 segala jurusan
            <br>§  Minimal telah/sedang menyelesaikan semester 2
            <br>§  IPK Minimal : 3,00 (PTN) dan 3,40 (PTS)
            <br>§  Tidak sedang menerima beasiswa dari pemberi beasiswa manapun',
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
