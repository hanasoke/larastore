@extends('layouts.app')

@section('title', $program->nama_program . ' - Pocinui')

@section('content')

{{-- =========================
     HERO PROGRAM
========================= --}}
<section class="bg-primary text-white py-5">
    <div class="container py-4">

        <div class="row align-items-center g-5">

            {{-- GAMBAR PROGRAM --}}
            <div class="col-lg-5 text-center">

                @if($program->gambar)

                    <img
                        src="{{ asset($program->gambar) }}"
                        alt="{{ $program->nama_program }}"
                        class="img-fluid rounded-4 shadow"
                        style="
                            width: 100%;
                            max-width: 450px;
                            height: 320px;
                            object-fit: cover;
                        "
                    >

                @else

                    <div
                        class="bg-light rounded-4 shadow
                               d-flex align-items-center
                               justify-content-center mx-auto"
                        style="
                            max-width: 450px;
                            height: 320px;
                        "
                    >
                        <span style="font-size: 100px;">
                            📚
                        </span>
                    </div>

                @endif

            </div>


            {{-- INFORMASI PROGRAM --}}
            <div class="col-lg-7">

                <div class="mb-3">

                    <span class="badge bg-warning text-dark me-2">
                        {{ $program->jenjang }}
                    </span>

                    <span class="badge bg-light text-primary">
                        {{ $program->mata_pelajaran }}
                    </span>

                </div>


                <h1 class="display-5 fw-bold">
                    {{ $program->nama_program }}
                </h1>


                <p class="lead mt-3">
                    {{ $program->deskripsi }}
                </p>


                <div class="mt-4">

                    <h3 class="fw-bold text-warning">

                        Rp{{ number_format(
                            $program->harga,
                            0,
                            ',',
                            '.'
                        ) }}

                    </h3>

                </div>


                <div class="mt-4">

                    <a
                        href="#informasi-program"
                        class="btn btn-warning btn-lg me-2"
                    >
                        Lihat Detail
                    </a>

                    <a
                        href="{{ route('program') }}"
                        class="btn btn-outline-light btn-lg"
                    >
                        Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>


{{-- =========================
     INFORMASI PROGRAM
========================= --}}
<section
    class="py-5"
    id="informasi-program"
>
    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Informasi Program
            </h2>

            <p class="text-muted">
                Informasi lengkap mengenai program
                {{ $program->nama_program }}.
            </p>

        </div>


        <div class="row g-4">

            {{-- MATA PELAJARAN --}}
            <div class="col-lg-3 col-md-6">

                <div
                    class="card h-100 border-0
                           shadow-sm text-center"
                >

                    <div class="card-body p-4">

                        @if($program->icon)

                            <img
                                src="{{ asset($program->icon) }}"
                                alt="{{ $program->mata_pelajaran }}"
                                style="
                                    width: 70px;
                                    height: 70px;
                                    object-fit: contain;
                                "
                                class="mb-3"
                            >

                        @else

                            <div
                                class="mb-3"
                                style="font-size: 55px;"
                            >
                                📖
                            </div>

                        @endif


                        <h5 class="fw-bold">
                            Mata Pelajaran
                        </h5>

                        <p class="text-primary fw-bold mb-0">
                            {{ $program->mata_pelajaran }}
                        </p>

                    </div>

                </div>

            </div>


            {{-- JENJANG --}}
            <div class="col-lg-3 col-md-6">

                <div
                    class="card h-100 border-0
                           shadow-sm text-center"
                >

                    <div class="card-body p-4">

                        <div
                            class="mb-3"
                            style="font-size: 55px;"
                        >
                            🎓
                        </div>

                        <h5 class="fw-bold">
                            Jenjang
                        </h5>

                        <p class="text-primary fw-bold mb-0">
                            {{ $program->jenjang }}
                        </p>

                    </div>

                </div>

            </div>


            {{-- JADWAL --}}
            <div class="col-lg-3 col-md-6">

                <div
                    class="card h-100 border-0
                           shadow-sm text-center"
                >

                    <div class="card-body p-4">

                        <div
                            class="mb-3"
                            style="font-size: 55px;"
                        >
                            🗓️
                        </div>

                        <h5 class="fw-bold">
                            Jadwal
                        </h5>

                        <p class="text-muted mb-0">
                            {{ $program->jadwal ?? 'Belum ditentukan' }}
                        </p>

                    </div>

                </div>

            </div>


            {{-- HARGA --}}
            <div class="col-lg-3 col-md-6">

                <div
                    class="card h-100 border-0
                           shadow-sm text-center"
                >

                    <div class="card-body p-4">

                        <div
                            class="mb-3"
                            style="font-size: 55px;"
                        >
                            💰
                        </div>

                        <h5 class="fw-bold">
                            Biaya
                        </h5>

                        <p class="text-success fw-bold mb-0">

                            Rp{{ number_format(
                                $program->harga,
                                0,
                                ',',
                                '.'
                            ) }}

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


{{-- =========================
     DESKRIPSI PROGRAM
========================= --}}
<section class="bg-light py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4 p-lg-5">

                        <h2 class="fw-bold mb-4">
                            Tentang Program
                        </h2>


                        <p
                            class="text-muted"
                            style="
                                font-size: 18px;
                                line-height: 1.8;
                            "
                        >
                            {{ $program->deskripsi }}
                        </p>


                        <hr class="my-4">


                        <h4 class="fw-bold mb-3">
                            Informasi Pembelajaran
                        </h4>


                        <div class="table-responsive">

                            <table
                                class="table
                                       table-borderless
                                       align-middle"
                            >

                                <tbody>

                                    <tr>

                                        <th style="width: 35%;">
                                            Nama Program
                                        </th>

                                        <td>
                                            {{ $program->nama_program }}
                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Mata Pelajaran
                                        </th>

                                        <td>
                                            {{ $program->mata_pelajaran }}
                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Jenjang
                                        </th>

                                        <td>
                                            {{ $program->jenjang }}
                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Jadwal
                                        </th>

                                        <td>
                                            {{ $program->jadwal ?? '-' }}
                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Biaya
                                        </th>

                                        <td>

                                            <strong class="text-success">

                                                Rp{{ number_format(
                                                    $program->harga,
                                                    0,
                                                    ',',
                                                    '.'
                                                ) }}

                                            </strong>

                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Status
                                        </th>

                                        <td>

                                            @if($program->aktif)

                                                <span class="badge bg-success">
                                                    Tersedia
                                                </span>

                                            @else

                                                <span class="badge bg-secondary">
                                                    Tidak Tersedia
                                                </span>

                                            @endif

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     KEUNGGULAN
========================= --}}
<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Mengapa Memilih Program Ini?
            </h2>

            <p class="text-muted">
                Belajar lebih terarah bersama Pocinui.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-md-4">

                <div
                    class="card h-100 border-0
                           shadow-sm text-center"
                >

                    <div class="card-body p-4">

                        <div
                            style="font-size: 60px;"
                            class="mb-3"
                        >
                            👨‍🏫
                        </div>

                        <h4 class="fw-bold">
                            Pengajar Berkualitas
                        </h4>

                        <p class="text-muted">
                            Materi dibimbing oleh pengajar
                            yang memahami mata pelajaran
                            yang diajarkan.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div
                    class="card h-100 border-0
                           shadow-sm text-center"
                >

                    <div class="card-body p-4">

                        <div
                            style="font-size: 60px;"
                            class="mb-3"
                        >
                            📚
                        </div>

                        <h4 class="fw-bold">
                            Materi Terarah
                        </h4>

                        <p class="text-muted">
                            Pembelajaran disesuaikan dengan
                            jenjang dan kebutuhan siswa.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div
                    class="card h-100 border-0
                           shadow-sm text-center"
                >

                    <div class="card-body p-4">

                        <div
                            style="font-size: 60px;"
                            class="mb-3"
                        >
                            📝
                        </div>

                        <h4 class="fw-bold">
                            Latihan Soal
                        </h4>

                        <p class="text-muted">
                            Siswa mendapatkan latihan untuk
                            meningkatkan pemahaman terhadap
                            materi pelajaran.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     PENDAFTARAN
========================= --}}
<section class="bg-primary text-white py-5">

    <div class="container text-center">

        <h2 class="fw-bold">
            Tertarik Mengikuti
            {{ $program->nama_program }}?
        </h2>


        <p class="lead mt-3">

            Daftar sekarang dan mulai belajar
            {{ $program->mata_pelajaran }}
            bersama Pocinui.

        </p>


        <div class="mt-4">

            {{-- Nanti bisa diarahkan ke halaman pendaftaran --}}
            <a
                href="{{ route('kontak') }}"
                class="btn btn-warning btn-lg me-2"
            >
                Daftar Sekarang
            </a>

            <a
                href="{{ route('program') }}"
                class="btn btn-outline-light btn-lg"
            >
                Program Lainnya
            </a>

        </div>

    </div>

</section>

@endsection