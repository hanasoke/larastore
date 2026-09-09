@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')

    {{-- Hero Section --}}

    <section class="py-5 bg-light">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <h1 class="display-4 fw-bold">

                        Belajar Lebih Mudah Bersama

                        <span class="text-primary">
                            Pocinui
                        </span>

                    </h1>


                    <p class="lead mt-3">

                        Bimbingan belajar untuk membantu siswa
                        memahami materi dengan lebih mudah,
                        nyaman, dan menyenangkan.

                    </p>


                    <div class="mt-4">

                        <a
                            href="{{ ('program') }}"
                            class="btn btn-primary btn-lg me-2"
                        >
                            Lihat Program
                        </a>


                        <a
                            href="#tentang"
                            class="btn btn-outline-primary btn-lg"
                        >
                            Tentang Kami
                        </a>

                    </div>

                </div>


                <div class="col-lg-6 text-center mt-5 mt-lg-0">

                    <img
                        src="{{ asset('images/bimbel/1.png') }}"
                        alt="Belajar bersama Pocinui"
                        class="img-fluid rounded shadow"
                    >

                </div>

            </div>

        </div>

    </section>



    {{-- Tentang --}}
    <section
        id="tentang"
        class="py-5"
    >

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Mengapa Memilih Pocinui?
                </h2>

                <p class="text-muted">
                    Kami membantu siswa belajar dengan metode
                    yang lebih mudah dipahami.
                </p>

            </div>


            <div class="row g-4">

                <div class="col-md-4">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="card-body text-center">

                            <h4 class="card-title">
                                Guru Berpengalaman
                            </h4>

                            <p class="card-text">

                                Belajar bersama guru yang memahami
                                kebutuhan dan kemampuan setiap siswa.

                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="card-body text-center">

                            <h4 class="card-title">
                                Materi Lengkap
                            </h4>

                            <p class="card-text">

                                Materi belajar disusun secara
                                terstruktur dan mudah dipahami.

                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="card-body text-center">

                            <h4 class="card-title">
                                Belajar Nyaman
                            </h4>

                            <p class="card-text">

                                Lingkungan belajar yang nyaman,
                                santai, tetapi tetap fokus.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- Program --}}
    <section
        id="program"
        class="py-5 bg-light"
    >

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Program Belajar
                </h2>

                <p class="text-muted">
                    Pilih program belajar sesuai kebutuhanmu.
                </p>

            </div>


            <div class="row g-4">

                <div class="col-md-4">

                    <div class="card shadow-sm h-100">

                        <div class="card-body">

                            <h4>
                                SD
                            </h4>

                            <p>
                                Program bimbingan belajar
                                untuk siswa sekolah dasar.
                            </p>

                            <a
                                href="#"
                                class="btn btn-primary"
                            >
                                Selengkapnya
                            </a>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card shadow-sm h-100">

                        <div class="card-body">

                            <h4>
                                SMP
                            </h4>

                            <p>
                                Program belajar untuk membantu
                                siswa menghadapi materi SMP.
                            </p>

                            <a
                                href="#"
                                class="btn btn-primary"
                            >
                                Selengkapnya
                            </a>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card shadow-sm h-100">

                        <div class="card-body">

                            <h4>
                                SMA
                            </h4>

                            <p>
                                Persiapan pembelajaran SMA
                                hingga persiapan masuk perguruan tinggi.
                            </p>

                            <a
                                href="#"
                                class="btn btn-primary"
                            >
                                Selengkapnya
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- Kontak --}}
    <section
        id="kontak"
        class="py-5"
    >

        <div class="container text-center">

            <h2 class="fw-bold">
                Hubungi Kami
            </h2>


            <p class="text-muted">
                Ingin mengetahui lebih lanjut mengenai
                program Pocinui?
            </p>

            <a
                href="#"
                class="btn btn-success btn-lg"
            >
                Hubungi Sekarang
            </a>

        </div>

    </section>
@endsection