<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gurus = [
             [
                'slug' => 'arif-budi-setiawan',
                'nama' => 'Arif Budi Setiawan',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 35,
                'mata_pelajaran' => 'Bahasa Indonesia',
                'pendidikan' =>
                    'S1 Pendidikan Bahasa dan Sastra Indonesia',
                'universitas' =>
                    'Universitas Negeri Jakarta',
                'pengalaman' => 7,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_bahasa_indonesia.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_bahasa_indonesia.png',
                'deskripsi' =>
                    'Pengajar Bahasa Indonesia yang membantu siswa memahami tata bahasa, karya sastra, membaca, dan teknik menulis.',
            ],

            [
                'slug' => 'sinta-utami',
                'nama' => 'Sinta Utami',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 29,
                'mata_pelajaran' => 'Bahasa Inggris',
                'pendidikan' =>
                    'S1 Pendidikan Bahasa Inggris',
                'universitas' =>
                    'Universitas Pendidikan Indonesia',
                'pengalaman' => 5,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_bahasa_inggris.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_bahasa_inggris.png',
                'deskripsi' =>
                    'Pengajar Bahasa Inggris yang berfokus pada grammar, vocabulary, speaking, reading, dan writing.',
            ],

            [
                'slug' => 'nadia-lestari',
                'nama' => 'Nadia Lestari',
                'gelar' => 'S.Si.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 31,
                'mata_pelajaran' => 'Biologi',
                'pendidikan' => 'S1 Biologi',
                'universitas' =>
                    'Universitas Indonesia',
                'pengalaman' => 6,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_biologi.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_biologi.png',
                'deskripsi' =>
                    'Pengajar Biologi yang membantu siswa memahami kehidupan, anatomi, genetika, ekosistem, dan berbagai konsep biologi.',
            ],

            [
                'slug' => 'ajeng-lestika-sari',
                'nama' => 'Ajeng Lestika Sari',
                'gelar' => 'S.E.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 34,
                'mata_pelajaran' => 'Ekonomi',
                'pendidikan' => 'S1 Ekonomi',
                'universitas' =>
                    'Universitas Diponegoro',
                'pengalaman' => 8,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_ekonomi.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_ekonomi.png',
                'deskripsi' =>
                    'Pengajar Ekonomi yang membantu siswa memahami konsep ekonomi, akuntansi, pasar, dan kegiatan perekonomian.',
            ],

            [
                'slug' => 'andi-saputra',
                'nama' => 'Andi Saputra',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 33,
                'mata_pelajaran' => 'Fisika',
                'pendidikan' =>
                    'S1 Pendidikan Fisika',
                'universitas' =>
                    'Universitas Negeri Yogyakarta',
                'pengalaman' => 6,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_fisika.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_fisika.png',
                'deskripsi' =>
                    'Pengajar Fisika yang membantu siswa memahami mekanika, listrik, gelombang, dan energi.',
            ],

            [
                'slug' => 'bahrudin-umar',
                'nama' => 'Bahrudin Umar',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 37,
                'mata_pelajaran' => 'Geografi',
                'pendidikan' =>
                    'S1 Pendidikan Geografi',
                'universitas' =>
                    'Universitas Negeri Semarang',
                'pengalaman' => 9,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_geografi.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_geografi.png',
                'deskripsi' =>
                    'Pengajar Geografi yang mendalami lingkungan, kependudukan, pemetaan, dan fenomena alam.',
            ],

            [
                'slug' => 'maha-putri',
                'nama' => 'Maha Putri',
                'gelar' => 'S.Si.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 30,
                'mata_pelajaran' => 'Kimia',
                'pendidikan' => 'S1 Kimia',
                'universitas' =>
                    'Institut Teknologi Bandung',
                'pengalaman' => 5,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_kimia.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_kimia.png',
                'deskripsi' =>
                    'Pengajar Kimia yang membantu siswa memahami atom, ikatan kimia, larutan, dan perhitungan kimia.',
            ],

            [
                'slug' => 'fajar-nugroho',
                'nama' => 'Fajar Nugroho',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 32,
                'mata_pelajaran' => 'Matematika',
                'pendidikan' =>
                    'S1 Pendidikan Matematika',
                'universitas' =>
                    'Universitas Negeri Malang',
                'pengalaman' => 7,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_matematika.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_matematika.png',
                'deskripsi' =>
                    'Pengajar Matematika yang berpengalaman dalam aljabar, geometri, statistika, dan kalkulus.',
            ],

            [
                'slug' => 'listyo-edi-prabowo',
                'nama' => 'Listyo Edi Prabowo',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 36,
                'mata_pelajaran' =>
                    'Pendidikan Pancasila',
                'pendidikan' =>
                    'S1 Pendidikan Pancasila dan Kewarganegaraan',
                'universitas' =>
                    'Universitas Negeri Surabaya',
                'pengalaman' => 8,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_pkn.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_pkn.png',
                'deskripsi' =>
                    'Pengajar Pendidikan Pancasila yang membahas Pancasila, konstitusi, hak warga negara, dan demokrasi.',
            ],

            [
                'slug' => 'nurul-febriati',
                'nama' => 'Nurul Febriati',
                'gelar' => 'S.Sos.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 30,
                'mata_pelajaran' => 'Sosiologi',
                'pendidikan' => 'S1 Sosiologi',
                'universitas' =>
                    'Universitas Gadjah Mada',
                'pengalaman' => 5,
                'foto' =>
                    'images/foto_guru/foto_profil_guru_sosiologi.png',
                'icon' =>
                    'images/icons/subjects/icon_pelajaran_sosiologi.png',
                'deskripsi' =>
                    'Pengajar Sosiologi yang membantu siswa memahami interaksi sosial, perubahan sosial, konflik, dan masyarakat.',
            ],
        ];

        foreach($gurus as $guru) {
            Guru::updateOrCreate(
                ['slug' => $guru['slug']],
                $guru 
            );
        }
    }
}
