@extends('layouts.app')

@section('title', 'Detail Guru - ' . $guru->nama)

@section('content')

{{-- =========================
     HERO / PROFIL UTAMA
========================= --}}
<section class="bg-primary text-white py-5">

    <div class="container py-4">

        <div class="row align-items-center g-5">

            {{-- FOTO GURU --}}
            <div class="col-lg-4 text-center">

                @if($guru->foto)

                    <img
                        src="{{ asset($guru->foto) }}"
                        alt="{{ $guru->nama }}"
                        class="img-fluid rounded-4 shadow"
                        style="
                            width: 320px;
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
                            width: 320px;
                            height: 320px;
                        "
                    >

                        <span
                            class="text-secondary"
                            style="font-size: 100px;"
                        >
                            👨‍🏫
                        </span>

                    </div>

                @endif

            </div>


            {{-- INFORMASI UTAMA --}}
            <div class="col-lg-8">

                <span
                    class="badge bg-warning text-dark
                           px-3 py-2 mb-3"
                >
                    {{ $guru->mata_pelajaran }}
                </span>


                <h1 class="display-5 fw-bold">

                    {{ $guru->nama }}

                    @if($guru->gelar)
                        , {{ $guru->gelar }}
                    @endif

                </h1>


                <p class="fs-4 mt-3 mb-3">

                    Guru {{ $guru->mata_pelajaran }}

                </p>


                @if($guru->deskripsi)

                    <p class="lead">

                        {{ $guru->deskripsi }}

                    </p>

                @endif


                <div class="mt-4">

                    <a
                        href="{{ route('program') }}"
                        class="btn btn-warning btn-lg me-2"
                    >
                        Lihat Program
                    </a>


                    <a
                        href="{{ route('guru') }}"
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
     BIODATA
========================= --}}
<section class="py-5">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-8">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4 p-lg-5">

                        <h2 class="fw-bold mb-4">
                            Biodata Guru
                        </h2>


                        <div class="table-responsive">

                            <table
                                class="table table-borderless
                                       align-middle"
                            >

                                <tbody>

                                    <tr>

                                        <th style="width: 35%;">
                                            Nama Lengkap
                                        </th>

                                        <td>
                                            {{ $guru->nama }}
                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Gelar
                                        </th>

                                        <td>
                                            {{ $guru->gelar ?? '-' }}
                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Jenis Kelamin
                                        </th>

                                        <td>
                                            {{ $guru->jenis_kelamin }}
                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Usia
                                        </th>

                                        <td>

                                            @if($guru->usia)

                                                {{ $guru->usia }} Tahun

                                            @else

                                                -

                                            @endif

                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Mata Pelajaran
                                        </th>

                                        <td>

                                            <span
                                                class="badge bg-primary"
                                            >

                                                {{ $guru->mata_pelajaran }}

                                            </span>

                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Pendidikan
                                        </th>

                                        <td>
                                            {{ $guru->pendidikan ?? '-' }}
                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Universitas
                                        </th>

                                        <td>
                                            {{ $guru->universitas ?? '-' }}
                                        </td>

                                    </tr>


                                    <tr>

                                        <th>
                                            Pengalaman Mengajar
                                        </th>

                                        <td>

                                            {{ $guru->pengalaman ?? 0 }}
                                            Tahun

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =========================
                 SIDEBAR
            ========================= --}}
            <div class="col-lg-4">

                {{-- MAPEL --}}
                <div
                    class="card border-0 shadow-sm
                           text-center mb-4"
                >

                    <div class="card-body p-4">

                        @if($guru->icon)

                            <img
                                src="{{ asset($guru->icon) }}"
                                alt="{{ $guru->mata_pelajaran }}"
                                class="mb-3"
                                style="
                                    width: 90px;
                                    height: 90px;
                                    object-fit: contain;
                                "
                            >

                        @else

                            <div
                                class="display-4 mb-3"
                            >
                                📚
                            </div>

                        @endif


                        <h5 class="fw-bold">
                            Mata Pelajaran
                        </h5>

                        <h4 class="text-primary fw-bold">

                            {{ $guru->mata_pelajaran }}

                        </h4>

                    </div>

                </div>


                {{-- PENGALAMAN --}}
                <div
                    class="card border-0 shadow-sm
                           text-center"
                >

                    <div class="card-body p-4">

                        <div
                            class="display-4 text-primary
                                   fw-bold"
                        >
                            {{ $guru->pengalaman ?? 0 }}
                        </div>

                        <h5 class="fw-bold">
                            Tahun Pengalaman
                        </h5>

                        <p class="text-muted mb-0">

                            Pengalaman mengajar dan
                            mendampingi siswa.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     PENDIDIKAN
========================= --}}
<section class="bg-light py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Latar Belakang Pendidikan
            </h2>

            <p class="text-muted">

                Pendidikan yang mendukung kompetensi
                pengajaran di Pocinui.

            </p>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4 p-md-5">

                        <div class="row align-items-center">

                            <div
                                class="col-md-3
                                       text-center mb-4 mb-md-0"
                            >

                                <div
                                    style="font-size: 80px;"
                                >
                                    🎓
                                </div>

                            </div>


                            <div class="col-md-9">

                                <h4 class="fw-bold">

                                    {{ $guru->pendidikan ?? 'Pendidikan belum tersedia' }}

                                </h4>


                                <h5 class="text-primary">

                                    {{ $guru->universitas ?? '-' }}

                                </h5>


                                <p class="text-muted mt-3 mb-0">

                                    Latar belakang pendidikan
                                    mendukung kompetensi dalam
                                    mengajar mata pelajaran

                                    <strong>
                                        {{ $guru->mata_pelajaran }}
                                    </strong>.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     TENTANG GURU
========================= --}}
<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="text-center mb-4">

                    <h2 class="fw-bold">
                        Tentang Pengajar
                    </h2>

                </div>


                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4 p-md-5">

                        @if($guru->deskripsi)

                            <p
                                class="fs-5 text-muted
                                       lh-lg mb-0"
                            >

                                {{ $guru->deskripsi }}

                            </p>

                        @else

                            <p
                                class="text-muted
                                       text-center mb-0"
                            >

                                Informasi mengenai guru
                                belum tersedia.

                            </p>

                        @endif

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     CALL TO ACTION
========================= --}}
<section class="bg-primary text-white py-5">

    <div class="container text-center">

        <h2 class="fw-bold">

            Ingin Belajar Bersama
            {{ $guru->nama }}?

        </h2>


        <p class="lead mt-3">

            Temukan program belajar

            {{ $guru->mata_pelajaran }}

            yang sesuai dengan kebutuhanmu.

        </p>


        <div class="mt-4">

            <a
                href="{{ route('program') }}"
                class="btn btn-warning btn-lg me-2"
            >
                Lihat Program
            </a>


            <a
                href="{{ route('kontak') }}"
                class="btn btn-outline-light btn-lg"
            >
                Hubungi Kami
            </a>

        </div>

    </div>

</section>

@endsection