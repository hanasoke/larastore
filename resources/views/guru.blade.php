@extends('layouts.app')

@section('title', 'Guru - Pocinui')

@section('content')

{{-- ================= HERO ================= --}}
<section class="bg-primary text-white py-5">

    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Guru Pocinui
        </h1>

        <p class="lead mt-3">
            Belajar bersama guru sesuai mata pelajaran yang kamu butuhkan.
        </p>

    </div>

</section>


{{-- ================= DAFTAR GURU ================= --}}
<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Tim Pengajar Kami
            </h2>

            <p class="text-muted">
                Pilih guru berdasarkan mata pelajaran yang ingin kamu pelajari.
            </p>

        </div>


        <div class="row g-4">

            {{-- ================= BAHASA INDONESIA ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_bahasa_indonesia.png') }}"
                        class="card-img-top"
                        alt="Guru Bahasa Indonesia"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_bahasa_indonesia.png') }}"
                            alt="Icon Bahasa Indonesia"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Bahasa Indonesia
                        </h4>

                        <h6 class="text-primary">
                            Bahasa Indonesia
                        </h6>

                        <p class="text-muted mt-3">
                            Membantu siswa memahami tata bahasa,
                            membaca, menulis, serta memahami teks.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= BAHASA INGGRIS ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_bahasa_inggris.png') }}"
                        class="card-img-top"
                        alt="Guru Bahasa Inggris"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_bahasa_inggris.png') }}"
                            alt="Icon Bahasa Inggris"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Bahasa Inggris
                        </h4>

                        <h6 class="text-primary">
                            Bahasa Inggris
                        </h6>

                        <p class="text-muted mt-3">
                            Belajar grammar, vocabulary,
                            reading, writing, dan speaking.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= BIOLOGI ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_biologi.png') }}"
                        class="card-img-top"
                        alt="Guru Biologi"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_biologi.png') }}"
                            alt="Icon Biologi"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Biologi
                        </h4>

                        <h6 class="text-primary">
                            Biologi
                        </h6>

                        <p class="text-muted mt-3">
                            Membantu memahami kehidupan,
                            sel, genetika, ekosistem, dan tubuh manusia.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= EKONOMI ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_ekonomi.png') }}"
                        class="card-img-top"
                        alt="Guru Ekonomi"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_ekonomi.png') }}"
                            alt="Icon Ekonomi"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Ekonomi
                        </h4>

                        <h6 class="text-primary">
                            Ekonomi
                        </h6>

                        <p class="text-muted mt-3">
                            Belajar konsep ekonomi,
                            pasar, keuangan, dan kegiatan ekonomi.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= FISIKA ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_fisika.png') }}"
                        class="card-img-top"
                        alt="Guru Fisika"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_fisika.png') }}"
                            alt="Icon Fisika"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Fisika
                        </h4>

                        <h6 class="text-primary">
                            Fisika
                        </h6>

                        <p class="text-muted mt-3">
                            Memahami gerak, gaya, energi,
                            listrik, gelombang, dan konsep fisika lainnya.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= GEOGRAFI ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_geografi.png') }}"
                        class="card-img-top"
                        alt="Guru Geografi"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_geografi.png') }}"
                            alt="Icon Geografi"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Geografi
                        </h4>

                        <h6 class="text-primary">
                            Geografi
                        </h6>

                        <p class="text-muted mt-3">
                            Membantu memahami bumi,
                            iklim, wilayah, peta, dan aktivitas manusia.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= KIMIA ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_kimia.png') }}"
                        class="card-img-top"
                        alt="Guru Kimia"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_kimia.png') }}"
                            alt="Icon Kimia"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Kimia
                        </h4>

                        <h6 class="text-primary">
                            Kimia
                        </h6>

                        <p class="text-muted mt-3">
                            Belajar unsur, senyawa,
                            reaksi kimia, atom, dan perhitungan kimia.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= MATEMATIKA ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_matematika.png') }}"
                        class="card-img-top"
                        alt="Guru Matematika"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_matematika.png') }}"
                            alt="Icon Matematika"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Matematika
                        </h4>

                        <h6 class="text-primary">
                            Matematika
                        </h6>

                        <p class="text-muted mt-3">
                            Belajar matematika dengan pendekatan
                            logis dan latihan soal bertahap.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= PENDIDIKAN PANCASILA / PPKN ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_pkn.png') }}"
                        class="card-img-top"
                        alt="Guru Pendidikan Pancasila"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_pkn.png') }}"
                            alt="Icon Pendidikan Pancasila"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Pendidikan Pancasila
                        </h4>

                        <h6 class="text-primary">
                            Pendidikan Pancasila / PPKn
                        </h6>

                        <p class="text-muted mt-3">
                            Belajar Pancasila, kewarganegaraan,
                            konstitusi, hak dan kewajiban warga negara.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= SOSIOLOGI ================= --}}
            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset('images/foto_guru/foto_profil_guru_sosiologi.png') }}"
                        class="card-img-top"
                        alt="Guru Sosiologi"
                        style="height: 300px; object-fit: cover;"
                    >

                    <div class="card-body text-center">

                        <img
                            src="{{ asset('images/icons/subjects/icon_pelajaran_sosiologi.png') }}"
                            alt="Icon Sosiologi"
                            width="70"
                            class="mb-3"
                        >

                        <h4 class="fw-bold">
                            Guru Sosiologi
                        </h4>

                        <h6 class="text-primary">
                            Sosiologi
                        </h6>

                        <p class="text-muted mt-3">
                            Memahami masyarakat,
                            interaksi sosial, perubahan sosial,
                            dan berbagai fenomena sosial.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= CTA ================= --}}
<section class="bg-primary text-white py-5">

    <div class="container text-center">

        <h2 class="fw-bold">
            Belajar Bersama Guru Pocinui
        </h2>

        <p>
            Pilih program yang sesuai dengan kebutuhan belajarmu.
        </p>

        <a
            href="{{ route('program') }}"
            class="btn btn-light btn-lg"
        >
            Lihat Program Belajar
        </a>

    </div>

</section>

@endsection