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
            ]
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
