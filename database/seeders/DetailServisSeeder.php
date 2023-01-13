<?php

namespace Database\Seeders;

use App\Models\DetailServis;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailServisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detailServis = [
            [
                'id'  => '1',
                'namaServis'      => 'Perbaikan Motherboard',
                'deskripsiServis' => 'Perbaikan motherboard komputer adalah proses mengatasi masalah yang terjadi pada komponen utama yang menghubungkan semua komponen lain di dalam komputer. 
                                      Cara-cara yang dapat dilakukan untuk memperbaiki motherboard antara lain dengan melakukan troubleshooting, mengganti kabel, driver, atau motherboard secara keseluruhan. ',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '2',
                'namaServis'      => 'Perbaikan Monitor',
                'deskripsiServis' => 'Perbaikan monitor komputer adalah proses mengatasi masalah yang terjadi pada perangkat yang digunakan untuk menampilkan gambar di layar. 
                                      Cara-cara yang dapat dilakukan untuk memperbaiki monitor antara lain dengan melakukan troubleshooting, mengganti kabel, driver, atau monitor secara keseluruhan.',
                'poinServis'      => '1. Perbaikan dilakukan jika layar monitor hitam, mati, atau tidak menampilkan gambar apapun.
                                      2. Perbaikan dilakukan jika Layar monitor bergetar atau berkedip-kedip.
                                      3. Perbaikan dilakukan jika Layar monitor terdapat garis-garis atau titik-titik.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '3',
                'namaServis'      => 'Pemberian Thermal Paste',
                'deskripsiServis' => 'Pemberian thermal paste pada komputer adalah proses aplikasi bahan pada permukaan heatsink dan komponen yang membutuhkan pendinginan untuk menurunkan suhu dan meningkatkan konduksi panas. 
                                      Pemberian thermal paste dilakukan dengan cara membersihkan permukaan, mengaplikasikan thermal paste secara merata, dan memasang kembali heatsink.',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '4',
                'namaServis'      => 'Ganti CPU',
                'deskripsiServis' => 'Ganti CPU (Central Processing Unit) pada komputer adalah proses mengganti CPU lama dengan CPU baru. CPU adalah komponen utama dari komputer yang bertugas untuk menjalankan instruksi-instruksi 
                                      yang diberikan oleh sistem operasi dan aplikasi lainnya. Ganti CPU biasanya dilakukan jika CPU lama sudah tidak bisa digunakan lagi atau jika Anda ingin meningkatkan kecepatan dan kinerja komputer.',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '5',
                'namaServis'      => 'Pembersihan Komputer',
                'deskripsiServis' => 'Pembersihan komputer dapat dilakukan dengan cara pembersihan bagian hardware maupun pembersihan software.
                                      Pembersihan bagian hardware apabila terdapat penumpukan debu. Pembersihan software untuk menghapus file-file yang tidak diperlukan 
                                      dan membersihkan registry. Pembersihan rutin dapat membantu kinerja komputer tetap stabil dan cepat.',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '6',
                'namaServis'      => 'Perbaikan Power Supply',
                'deskripsiServis' => 'Perbaikan power supply adalah proses mengatasi masalah yang terjadi pada komponen yang menyediakan daya listrik ke komponen lain di dalam komputer. 
                                      Cara-cara yang dapat dilakukan untuk memperbaiki power supply antara lain dengan melakukan troubleshooting, mengganti kabel, filter, atau power supply secara keseluruhan. ',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '7',
                'namaServis'      => 'Ganti Harddisk',
                'deskripsiServis' => 'Harddisk adalah perangkat penyimpanan yang digunakan oleh komputer untuk menyimpan file-file dan data yang diperlukan. 
                                      Ganti harddisk dilakukan jika harddisk terdapat kerusakan, jika anda ingin menambah kapasitas penyimpanan yang lebih besar, atau mengganti dari harddisk HDD ke SSD.',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '8',
                'namaServis'      => 'Perbaikan VGA Card',
                'deskripsiServis' => 'Perbaikan kartu VGA adalah proses mengatasi masalah yang terjadi pada kartu grafis yang digunakan untuk menampilkan gambar di layar komputer. 
                                      Perbaikan kartu VGA dengan beberapa cara yaitu dengan melakukan troubleshooting, membersihkan debu, mengganti heatsink, atau menggantinya dengan yang baru.',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '9',
                'namaServis'      => 'Perbaikan RAM',
                'deskripsiServis' => 'Perbaikan RAM adalah proses mengatasi masalah yang terjadi pada memori sementara yang digunakan oleh komputer untuk menyimpan data. 
                                      Cara-cara yang dilakukan untuk memperbaiki RAM antara lain dengan melakukan troubleshooting, membersihkan slot RAM, mengganti modul RAM, atau menggantinya dengan yang baru. ',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '10',
                'namaServis'      => 'Ganti ROM',
                'deskripsiServis' => 'ROM adalah jenis memori yang hanya dapat dibaca dan tidak dapat ditulisi kembali, biasanya digunakan untuk menyimpan firmware atau kode yang diperlukan oleh komputer untuk booting. 
                                      Ganti ROM dilakukan jika ROM lama terdapat kerusakan atau Anda ingin mengupgrade firmware komputer.',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '11',
                'namaServis'      => 'Perbaikan Water Cooling',
                'deskripsiServis' => 'Perbaikan sistem water cooling adalah proses mengatasi masalah yang terjadi pada sistem pendingin yang menggunakan air untuk menurunkan suhu komponen komputer. 
                                      Perbaikan water cooling dilakungan dengan beberapa cara antara lain dengan melakukan troubleshooting, mengganti radiator, pump, atau water block, atau menggantinya dengan yang baru.',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
            [
                'id'  => '12',
                'namaServis'      => 'Ganti Case PC',
                'deskripsiServis' => 'Case adalah bagian luar dari komputer yang berfungsi sebagai pelindung dan memudahkan akses ke komponen-komponen di dalamnya. 
                                      Ganti case dilakukan jika casing lama sudah tidak bisa digunakan lagi dan jika Anda ingin mengubah desain atau warna case komputer.',
                'poinServis'      => '1. Mengganti komponen yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.
                                      2. Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.
                                      3. Mengganti BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan.',
                'hargaServis'     => 'Rp 250.000',
                'image'           => 'detailservis.png' 
            ],
        ];
        DetailServis::insert($detailServis);
    }
}
