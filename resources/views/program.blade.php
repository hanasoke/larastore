@extends('layouts.app')

@section('title', 'Program Belajar - Pocinui')

@section('content')

{{-- ================= HERO ================= --}}
<section class="bg-light py-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="display-4 fw-bold">
                    Program Belajar Pocinui
                </h1>
                <p class="lead mt-3">
                    Pilih program belajar sesuai jenjang pendidikanmu
                    dan tingkatkan kemampuan akademik bersama
                    pengajar Pocinui.
                </p>
                <a href="#daftar-program"
                   class="btn btn-primary btn-lg mt-3">
                    Lihat Program
                </a>
            </div>
            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <img
                    src="{{ asset('images/bimbel/3.png') }}"
                    alt="Program Belajar Pocinui"
                    class="img-fluid rounded shadow"
                >
            </div>
        </div>
    </div>
</section>


{{-- ================= DAFTAR PROGRAM ================= --}}
<section id="daftar-program" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Pilihan Program Belajar
            </h2>
            <p class="text-muted">
                Tersedia program untuk siswa SD, SMP, dan SMA.
            </p>
        </div>
        <div class="row g-4">
            {{-- SD --}}
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <span class="badge bg-success fs-6">
                                Sekolah Dasar
                            </span>
                            <h3 class="fw-bold mt-3">
                                Program SD
                            </h3>
                        </div>
                        <p class="text-muted">
                            Program belajar untuk membantu siswa
                            memahami konsep dasar pelajaran sekolah
                            dengan metode yang mudah dan menyenangkan.
                        </p>
                        <hr>
                        <h5 class="fw-bold">
                            Mata Pelajaran:
                        </h5>
                        <ul>
                            <li>Matematika</li>
                            <li>Bahasa Indonesia</li>
                            <li>Bahasa Inggris</li>
                            <li>IPAS</li>
                            <li>PPKn</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="#"
                           class="btn btn-success w-100">
                            Pilih Program SD
                        </a>
                    </div>
                </div>
            </div>

            {{-- SMP --}}
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <span class="badge bg-primary fs-6">
                                Sekolah Menengah Pertama
                            </span>
                            <h3 class="fw-bold mt-3">
                                Program SMP
                            </h3>
                        </div>
                        <p class="text-muted">
                            Program pendampingan belajar untuk
                            memperkuat pemahaman materi SMP dan
                            membantu siswa menghadapi ujian.
                        </p>
                        <hr>
                        <h5 class="fw-bold">
                            Mata Pelajaran:
                        </h5>
                        <ul>
                            <li>Matematika</li>
                            <li>Bahasa Indonesia</li>
                            <li>Bahasa Inggris</li>
                            <li>IPA</li>
                            <li>IPS</li>
                            <li>PPKn</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="#"
                           class="btn btn-primary w-100">
                            Pilih Program SMP
                        </a>
                    </div>
                </div>
            </div>

            {{-- SMA --}}
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <span class="badge bg-danger fs-6">
                                Sekolah Menengah Atas
                            </span>
                            <h3 class="fw-bold mt-3">
                                Program SMA
                            </h3>
                        </div>
                        <p class="text-muted">
                            Program belajar untuk membantu siswa
                            menguasai pelajaran SMA sekaligus
                            mempersiapkan diri menuju perguruan tinggi.
                        </p>
                        <hr>
                        <h5 class="fw-bold">
                            Mata Pelajaran:
                        </h5>
                        <ul>
                            <li>Matematika</li>
                            <li>Bahasa Indonesia</li>
                            <li>Bahasa Inggris</li>
                            <li>Fisika</li>
                            <li>Kimia</li>
                            <li>Biologi</li>
                            <li>Ekonomi</li>
                            <li>Geografi</li>
                            <li>Sosiologi</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="#"
                           class="btn btn-danger w-100">
                            Pilih Program SMA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ================= KEUNGGULAN ================= --}}
<section class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Keunggulan Program Pocinui
            </h2>
            <p class="text-muted">
                Kami berusaha menciptakan pengalaman belajar
                yang nyaman dan efektif.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="display-5 mb-3">
                            👨‍🏫
                        </div>
                        <h5 class="fw-bold">
                            Guru Berpengalaman
                        </h5>
                        <p class="text-muted mb-0">
                            Dibimbing oleh pengajar yang
                            menguasai bidang pelajarannya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="display-5 mb-3">
                            📚
                        </div>
                        <h5 class="fw-bold">
                            Materi Lengkap
                        </h5>
                        <p class="text-muted mb-0">
                            Materi disusun secara sistematis
                            sesuai kebutuhan siswa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="display-5 mb-3">
                            📝
                        </div>
                        <h5 class="fw-bold">
                            Latihan Soal
                        </h5>
                        <p class="text-muted mb-0">
                            Tersedia latihan untuk mengukur
                            pemahaman materi yang dipelajari.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="display-5 mb-3">
                            🎯
                        </div>
                        <h5 class="fw-bold">
                            Fokus Target
                        </h5>
                        <p class="text-muted mb-0">
                            Membantu siswa mencapai target
                            akademik secara bertahap.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ================= CARA BELAJAR ================= --}}
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Bagaimana Proses Belajarnya?
            </h2>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-md-3 text-center">
                <div class="display-4 fw-bold text-primary">
                    1
                </div>
                <h5 class="fw-bold mt-3">
                    Pilih Program
                </h5>
                <p class="text-muted">
                    Tentukan program sesuai jenjang sekolahmu.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <div class="display-4 fw-bold text-primary">
                    2
                </div>
                <h5 class="fw-bold mt-3">
                    Daftar
                </h5>
                <p class="text-muted">
                    Isi formulir pendaftaran siswa.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <div class="display-4 fw-bold text-primary">
                    3
                </div>
                <h5 class="fw-bold mt-3">
                    Mulai Belajar
                </h5>
                <p class="text-muted">
                    Mulai belajar bersama guru Pocinui.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <div class="display-4 fw-bold text-primary">
                    4
                </div>
                <h5 class="fw-bold mt-3">
                    Evaluasi
                </h5>
                <p class="text-muted">
                    Pantau perkembangan hasil belajarmu.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ================= CTA ================= --}}
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold">
            Siap Meningkatkan Prestasi Belajarmu?
        </h2>
        <p class="lead mt-3">
            Bergabung bersama Pocinui dan pilih
            program belajar yang sesuai kebutuhanmu.
        </p>
        <a href="#"
           class="btn btn-success btn-lg mt-2">
            Daftar Sekarang
        </a>
    </div>
</section>

@endsection 