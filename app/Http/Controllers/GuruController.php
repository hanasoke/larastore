<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GuruController extends Controller
{
    private function dataGuru()
    {
        return [

            'arif-budi-setiawan' => [
                'nama' => 'Arif Budi Setiawan',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 35,
                'mata_pelajaran' => 'Bahasa Indonesia',
                'pendidikan' => 'S1 Pendidikan Bahasa dan Sastra Indonesia',
                'universitas' => 'Universitas Negeri Jakarta',
                'pengalaman' => '7 Tahun',
                'status' => 'Guru Bahasa Indonesia',
                'email' => 'arif@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_bahasa_indonesia.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_bahasa_indonesia.png',

                'deskripsi' =>
                    'Pengajar Bahasa Indonesia yang membantu siswa memahami
                    tata bahasa, karya sastra, membaca, dan teknik menulis
                    secara kreatif.',

                'keahlian' => [
                    'Tata Bahasa Indonesia',
                    'Karya Sastra',
                    'Menulis Kreatif',
                    'Pemahaman Teks',
                    'Persiapan Ujian'
                ]
            ],


            'sinta-utami' => [
                'nama' => 'Sinta Utami',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 29,
                'mata_pelajaran' => 'Bahasa Inggris',
                'pendidikan' => 'S1 Pendidikan Bahasa Inggris',
                'universitas' => 'Universitas Pendidikan Indonesia',
                'pengalaman' => '5 Tahun',
                'status' => 'Guru Bahasa Inggris',
                'email' => 'sinta@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_bahasa_inggris.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_bahasa_inggris.png',

                'deskripsi' =>
                    'Pengajar Bahasa Inggris yang berfokus pada grammar,
                    vocabulary, speaking, reading, dan writing.',

                'keahlian' => [
                    'Grammar',
                    'Vocabulary',
                    'Speaking',
                    'Reading',
                    'Writing'
                ]
            ],


            'nadia-lestari' => [
                'nama' => 'Nadia Lestari',
                'gelar' => 'S.Si.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 31,
                'mata_pelajaran' => 'Biologi',
                'pendidikan' => 'S1 Biologi',
                'universitas' => 'Universitas Indonesia',
                'pengalaman' => '6 Tahun',
                'status' => 'Guru Biologi',
                'email' => 'nadia@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_biologi.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_biologi.png',

                'deskripsi' =>
                    'Pengajar Biologi yang membantu siswa memahami
                    kehidupan, anatomi, genetika, ekosistem, dan
                    berbagai konsep biologi.',

                'keahlian' => [
                    'Anatomi',
                    'Genetika',
                    'Ekologi',
                    'Biologi Sel',
                    'Sistem Organ'
                ]
            ],


            'ajeng-lestika-sari' => [
                'nama' => 'Ajeng Lestika Sari',
                'gelar' => 'S.E.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 34,
                'mata_pelajaran' => 'Ekonomi',
                'pendidikan' => 'S1 Ekonomi',
                'universitas' => 'Universitas Diponegoro',
                'pengalaman' => '8 Tahun',
                'status' => 'Guru Ekonomi',
                'email' => 'ajeng@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_ekonomi.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_ekonomi.png',

                'deskripsi' =>
                    'Pengajar Ekonomi yang membantu siswa memahami
                    konsep ekonomi, akuntansi, pasar, dan kegiatan
                    perekonomian.',

                'keahlian' => [
                    'Ekonomi Mikro',
                    'Ekonomi Makro',
                    'Akuntansi',
                    'Perbankan',
                    'Pasar'
                ]
            ],


            'andi-saputra' => [
                'nama' => 'Andi Saputra',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 33,
                'mata_pelajaran' => 'Fisika',
                'pendidikan' => 'S1 Pendidikan Fisika',
                'universitas' => 'Universitas Negeri Yogyakarta',
                'pengalaman' => '6 Tahun',
                'status' => 'Guru Fisika',
                'email' => 'andi@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_fisika.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_fisika.png',

                'deskripsi' =>
                    'Pengajar Fisika yang membantu siswa memahami
                    mekanika, listrik, gelombang, dan energi.',

                'keahlian' => [
                    'Mekanika',
                    'Listrik',
                    'Gelombang',
                    'Energi',
                    'Termodinamika'
                ]
            ],


            'bahrudin-umar' => [
                'nama' => 'Bahrudin Umar',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 37,
                'mata_pelajaran' => 'Geografi',
                'pendidikan' => 'S1 Pendidikan Geografi',
                'universitas' => 'Universitas Negeri Semarang',
                'pengalaman' => '9 Tahun',
                'status' => 'Guru Geografi',
                'email' => 'bahrudin@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_geografi.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_geografi.png',

                'deskripsi' =>
                    'Pengajar Geografi yang mendalami lingkungan,
                    kependudukan, pemetaan, dan fenomena alam.',

                'keahlian' => [
                    'Pemetaan',
                    'Lingkungan',
                    'Kependudukan',
                    'Fenomena Alam',
                    'Geografi Regional'
                ]
            ],


            'maha-putri' => [
                'nama' => 'Maha Putri',
                'gelar' => 'S.Si.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 30,
                'mata_pelajaran' => 'Kimia',
                'pendidikan' => 'S1 Kimia',
                'universitas' => 'Institut Teknologi Bandung',
                'pengalaman' => '5 Tahun',
                'status' => 'Guru Kimia',
                'email' => 'maha@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_kimia.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_kimia.png',

                'deskripsi' =>
                    'Pengajar Kimia yang membantu siswa memahami
                    atom, ikatan kimia, larutan, dan perhitungan kimia.',

                'keahlian' => [
                    'Struktur Atom',
                    'Ikatan Kimia',
                    'Stoikiometri',
                    'Larutan',
                    'Kimia Organik'
                ]
            ],


            'fajar-nugroho' => [
                'nama' => 'Fajar Nugroho',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 32,
                'mata_pelajaran' => 'Matematika',
                'pendidikan' => 'S1 Pendidikan Matematika',
                'universitas' => 'Universitas Negeri Malang',
                'pengalaman' => '7 Tahun',
                'status' => 'Guru Matematika',
                'email' => 'fajar@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_matematika.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_matematika.png',

                'deskripsi' =>
                    'Pengajar Matematika yang berpengalaman dalam
                    aljabar, geometri, statistika, dan kalkulus.',

                'keahlian' => [
                    'Aljabar',
                    'Geometri',
                    'Statistika',
                    'Kalkulus',
                    'Persiapan Ujian'
                ]
            ],


            'listyo-edi-prabowo' => [
                'nama' => 'Listyo Edi Prabowo',
                'gelar' => 'S.Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'usia' => 36,
                'mata_pelajaran' => 'Pendidikan Pancasila',
                'pendidikan' => 'S1 Pendidikan Pancasila dan Kewarganegaraan',
                'universitas' => 'Universitas Negeri Surabaya',
                'pengalaman' => '8 Tahun',
                'status' => 'Guru Pendidikan Pancasila',
                'email' => 'listyo@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_pkn.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_pkn.png',

                'deskripsi' =>
                    'Pengajar Pendidikan Pancasila yang membahas
                    Pancasila, konstitusi, hak warga negara,
                    dan demokrasi.',

                'keahlian' => [
                    'Pancasila',
                    'Konstitusi',
                    'Kewarganegaraan',
                    'Demokrasi',
                    'Hak dan Kewajiban'
                ]
            ],


            'nurul-febriati' => [
                'nama' => 'Nurul Febriati',
                'gelar' => 'S.Sos.',
                'jenis_kelamin' => 'Perempuan',
                'usia' => 30,
                'mata_pelajaran' => 'Sosiologi',
                'pendidikan' => 'S1 Sosiologi',
                'universitas' => 'Universitas Gadjah Mada',
                'pengalaman' => '5 Tahun',
                'status' => 'Guru Sosiologi',
                'email' => 'nurul@pocinui.com',

                'foto' => 'images/foto_guru/foto_profil_guru_sosiologi.png',

                'icon' => 'images/icons/subjects/icon_pelajaran_sosiologi.png',

                'deskripsi' =>
                    'Pengajar Sosiologi yang membantu siswa memahami
                    interaksi sosial, perubahan sosial, konflik,
                    dan masyarakat.',

                'keahlian' => [
                    'Interaksi Sosial',
                    'Perubahan Sosial',
                    'Konflik Sosial',
                    'Masyarakat',
                    'Penelitian Sosial'
                ]
            ],

        ];
    }


    public function index()
    {
        $guru = $this->dataGuru();

        return view('guru', compact('guru'));
    }


    public function show($slug)
    {
        $semuaGuru = $this->dataGuru();

        if (!isset($semuaGuru[$slug])) {
            abort(404);
        }

        $guru = $semuaGuru[$slug];

        return view('detail-guru', compact('guru'));
    }
}
