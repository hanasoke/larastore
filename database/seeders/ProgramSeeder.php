<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'slug' => 'matematika-sd',
                'nama_program' => 'Matematika SD',
                'mata_pelajaran' => 'Matematika',
                'jenjang' => 'SD',

                'deskripsi' =>
                    'Program Matematika untuk membantu siswa SD '
                    . 'memahami konsep dasar matematika dan '
                    . 'meningkatkan kemampuan berhitung.',

                'jadwal' => 'Senin & Rabu, 16.00 - 17.30',

                'harga' => 150000,

                'gambar' =>
                    'images/program/matematika.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_matematika.png',

                'aktif' => true,
            ],

            [
                'slug' => 'matematika-smp',
                'nama_program' => 'Matematika SMP',
                'mata_pelajaran' => 'Matematika',
                'jenjang' => 'SMP',

                'deskripsi' =>
                    'Program Matematika SMP dengan pembahasan '
                    . 'aljabar, geometri, statistika, dan '
                    . 'persiapan ujian.',

                'jadwal' => 'Selasa & Kamis, 16.00 - 17.30',

                'harga' => 200000,

                'gambar' =>
                    'images/program/matematika.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_matematika.png',

                'aktif' => true,
            ],

            [
                'slug' => 'matematika-sma',
                'nama_program' => 'Matematika SMA',
                'mata_pelajaran' => 'Matematika',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Matematika SMA untuk membantu '
                    . 'siswa memahami aljabar, trigonometri, '
                    . 'statistika, dan kalkulus.',

                'jadwal' => 'Senin & Kamis, 18.30 - 20.00',

                'harga' => 250000,

                'gambar' =>
                    'images/program/matematika.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_matematika.png',

                'aktif' => true,
            ],

            [
                'slug' => 'bahasa-indonesia-sma',
                'nama_program' => 'Bahasa Indonesia SMA',
                'mata_pelajaran' => 'Bahasa Indonesia',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Bahasa Indonesia untuk meningkatkan '
                    . 'kemampuan membaca, memahami teks, '
                    . 'menulis, dan persiapan ujian.',

                'jadwal' => 'Selasa & Jumat, 18.30 - 20.00',

                'harga' => 200000,

                'gambar' =>
                    'images/program/bahasa-indonesia.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_bahasa_indonesia.png',

                'aktif' => true,
            ],

            [
                'slug' => 'bahasa-inggris-sma',
                'nama_program' => 'Bahasa Inggris SMA',
                'mata_pelajaran' => 'Bahasa Inggris',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Bahasa Inggris yang membahas '
                    . 'grammar, vocabulary, reading, '
                    . 'writing, dan speaking.',

                'jadwal' => 'Rabu & Jumat, 18.30 - 20.00',

                'harga' => 220000,

                'gambar' =>
                    'images/program/bahasa-inggris.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_bahasa_inggris.png',

                'aktif' => true,
            ],

            [
                'slug' => 'fisika-sma',
                'nama_program' => 'Fisika SMA',
                'mata_pelajaran' => 'Fisika',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Fisika SMA dengan pembahasan '
                    . 'mekanika, energi, listrik, gelombang, '
                    . 'dan latihan soal.',

                'jadwal' => 'Selasa & Kamis, 18.30 - 20.00',

                'harga' => 250000,

                'gambar' =>
                    'images/program/fisika.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_fisika.png',

                'aktif' => true,
            ],

            [
                'slug' => 'kimia-sma',
                'nama_program' => 'Kimia SMA',
                'mata_pelajaran' => 'Kimia',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Kimia SMA untuk memahami atom, '
                    . 'ikatan kimia, stoikiometri, larutan, '
                    . 'dan kimia organik.',

                'jadwal' => 'Senin & Rabu, 18.30 - 20.00',

                'harga' => 250000,

                'gambar' =>
                    'images/program/kimia.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_kimia.png',

                'aktif' => true,
            ],

            [
                'slug' => 'biologi-sma',
                'nama_program' => 'Biologi SMA',
                'mata_pelajaran' => 'Biologi',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Biologi SMA yang membahas sel, '
                    . 'genetika, anatomi, sistem organ, '
                    . 'evolusi, dan ekologi.',

                'jadwal' => 'Rabu & Sabtu, 16.00 - 17.30',

                'harga' => 230000,

                'gambar' =>
                    'images/program/biologi.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_biologi.png',

                'aktif' => true,
            ],

            [
                'slug' => 'fisika-smp',
                'nama_program' => 'Fisika SMP',
                'mata_pelajaran' => 'Fisika',
                'jenjang' => 'SMP',

                'deskripsi' =>
                    'Program Fisika SMP untuk membantu siswa memahami '
                    . 'konsep dasar gerak, gaya, energi, tekanan, '
                    . 'getaran, gelombang, dan listrik.',

                'jadwal' => 'Senin & Rabu, 16.00 - 17.30',

                'harga' => 200000,

                'gambar' =>
                    'images/program/fisika-smp.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_fisika.png',

                'aktif' => true,
            ],

            [
                'slug' => 'sosiologi-sma',
                'nama_program' => 'Sosiologi SMA',
                'mata_pelajaran' => 'Sosiologi',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Sosiologi SMA untuk membantu siswa memahami '
                    . 'interaksi sosial, kelompok sosial, perubahan sosial, '
                    . 'konflik, integrasi, dan kehidupan masyarakat.',

                'jadwal' => 'Selasa & Kamis, 16.00 - 17.30',

                'harga' => 200000,

                'gambar' =>
                    'images/program/sosiologi.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_sosiologi.png',

                'aktif' => true,
            ],

            [
                'slug' => 'ekonomi-sma',
                'nama_program' => 'Ekonomi SMA',
                'mata_pelajaran' => 'Ekonomi',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Ekonomi SMA untuk membantu siswa memahami '
                    . 'konsep ekonomi, permintaan dan penawaran, pasar, '
                    . 'perbankan, akuntansi, serta ekonomi makro dan mikro.',

                'jadwal' => 'Senin & Kamis, 18.30 - 20.00',

                'harga' => 220000,

                'gambar' =>
                    'images/program/ekonomi.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_ekonomi.png',

                'aktif' => true,
            ],

            [
                'slug' => 'biologi-smp',
                'nama_program' => 'Biologi SMP',
                'mata_pelajaran' => 'Biologi',
                'jenjang' => 'SMP',

                'deskripsi' =>
                    'Program Biologi SMP untuk membantu siswa memahami '
                    . 'makhluk hidup, sel, sistem organ manusia, '
                    . 'ekosistem, klasifikasi, dan lingkungan.',

                'jadwal' => 'Rabu & Jumat, 16.00 - 17.30',

                'harga' => 200000,

                'gambar' =>
                    'images/program/biologi-smp.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_biologi.png',

                'aktif' => true,
            ],

            [
                'slug' => 'geografi-sma',
                'nama_program' => 'Geografi SMA',
                'mata_pelajaran' => 'Geografi',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Geografi SMA untuk membantu siswa memahami '
                    . 'pemetaan, atmosfer, hidrosfer, litosfer, '
                    . 'kependudukan, lingkungan, dan wilayah.',

                'jadwal' => 'Selasa & Jumat, 18.30 - 20.00',

                'harga' => 210000,

                'gambar' =>
                    'images/program/geografi.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_geografi.png',

                'aktif' => true,
            ],

            [
                'slug' => 'ips-smp',
                'nama_program' => 'IPS SMP',
                'mata_pelajaran' => 'IPS',
                'jenjang' => 'SMP',

                'deskripsi' =>
                    'Program IPS SMP untuk membantu siswa memahami '
                    . 'materi geografi, ekonomi, sejarah, dan sosiologi '
                    . 'secara terstruktur dan mudah dipahami.',

                'jadwal' => 'Senin & Rabu, 16.00 - 17.30',

                'harga' => 200000,

                'gambar' =>
                    'images/program/ips-smp.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_ips.png',

                'aktif' => true,
            ],

            [
                'slug' => 'bahasa-jepang-sma',
                'nama_program' => 'Bahasa Jepang SMA',
                'mata_pelajaran' => 'Bahasa Jepang',
                'jenjang' => 'SMA',

                'deskripsi' =>
                    'Program Bahasa Jepang untuk membantu siswa mempelajari '
                    . 'kosakata, tata bahasa, percakapan dasar, Hiragana, '
                    . 'Katakana, dan pengenalan Kanji.',

                'jadwal' => 'Sabtu, 13.00 - 15.00',

                'harga' => 220000,

                'gambar' =>
                    'images/program/bahasa-jepang.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_bahasa_jepang.png',

                'aktif' => true,
            ],

            [
                'slug' => 'bahasa-inggris-smp',
                'nama_program' => 'Bahasa Inggris SMP',
                'mata_pelajaran' => 'Bahasa Inggris',
                'jenjang' => 'SMP',

                'deskripsi' =>
                    'Program Bahasa Inggris SMP untuk meningkatkan kemampuan '
                    . 'grammar, vocabulary, reading, writing, listening, '
                    . 'dan speaking siswa.',

                'jadwal' => 'Selasa & Kamis, 16.00 - 17.30',

                'harga' => 200000,

                'gambar' =>
                    'images/program/bahasa-inggris-smp.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_bahasa_inggris.png',

                'aktif' => true,
            ],

            [
                'slug' => 'kimia-smp',
                'nama_program' => 'Kimia SMP',
                'mata_pelajaran' => 'Kimia',
                'jenjang' => 'SMP',

                'deskripsi' =>
                    'Program Kimia SMP untuk membantu siswa memahami '
                    . 'konsep dasar materi, unsur, senyawa, campuran, '
                    . 'perubahan zat, asam basa, dan konsep kimia dasar.',

                'jadwal' => 'Rabu & Jumat, 16.00 - 17.30',

                'harga' => 200000,

                'gambar' =>
                    'images/program/kimia-smp.jpg',

                'icon' =>
                    'images/icons/subjects/icon_pelajaran_kimia.png',

                'aktif' => true,
            ],
        ];

        foreach($programs as $program) {

            Program::updateOrCreate(
                [
                    'slug' => $program['slug']
                ],
                $program 
            );
        }
    }
}
