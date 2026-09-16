@extends('layouts.app')

@section('title', $guru['nama'] . ' - Pocinui')

@section('content')

{{-- ================= HEADER ================= --}}
<section class="bg-primary text-white py-5">

    <div class="container py-4">

        <div class="row align-items-center g-5">

            {{-- Foto --}}
            <div class="col-lg-4 text-center">

                <img
                    src="{{ asset($guru['foto']) }}"
                    alt="{{ $guru['nama'] }}"
                    class="img-fluid rounded-4 shadow"
                    style="
                        width: 350px;
                        height: 350px;
                        object-fit: cover;
                    "
                >

            </div>


            {{-- Profil --}}
            <div class="col-lg-8">

                <div class="d-flex align-items-center mb-3">

                    <img
                        src="{{ asset($guru['icon']) }}"
                        alt="{{ $guru['mata_pelajaran'] }}"
                        width="60"
                        height="60"
                        class="me-3"
                    >

                    <div>

                        <span class="badge bg-light text-primary mb-2">
                            {{ $guru['mata_pelajaran'] }}
                        </span>

                        <h1 class="fw-bold mb-0">
                            {{ $guru['nama'] }}, {{ $guru['gelar'] }}
                        </h1>

                    </div>

                </div>


                <h4 class="fw-normal mt-3">
                    {{ $guru['status'] }}
                </h4>


                <p class="lead mt-3 mb-0">
                    {{ $guru['deskripsi'] }}
                </p>

            </div>

        </div>

    </div>

</section>



{{-- ================= BIODATA ================= --}}
<section class="py-5">

    <div class="container">

        <div class="row g-4">


            {{-- Biodata Guru --}}
            <div class="col-lg-7">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4 p-lg-5">

                        <h2 class="fw-bold mb-4">
                            Biodata Guru
                        </h2>


                        <div class="table-responsive">

                            <table class="table table-borderless align-middle">

                                <tbody>

                                    <tr>
                                        <th style="width: 35%;">
                                            Nama Lengkap
                                        </th>

                                        <td>
                                            {{ $guru['nama'] }}
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>
                                            Gelar
                                        </th>

                                        <td>
                                            {{ $guru['gelar'] }}
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>
                                            Jenis Kelamin
                                        </th>

                                        <td>
                                            {{ $guru['jenis_kelamin'] }}
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>
                                            Usia
                                        </th>

                                        <td>
                                            {{ $guru['usia'] }} Tahun
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>
                                            Pendidikan
                                        </th>

                                        <td>
                                            {{ $guru['pendidikan'] }}
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>
                                            Perguruan Tinggi
                                        </th>

                                        <td>
                                            {{ $guru['universitas'] }}
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>
                                            Mata Pelajaran
                                        </th>

                                        <td>

                                            <span class="badge bg-primary">

                                                {{ $guru['mata_pelajaran'] }}

                                            </span>

                                        </td>
                                    </tr>


                                    <tr>
                                        <th>
                                            Pengalaman Mengajar
                                        </th>

                                        <td>
                                            {{ $guru['pengalaman'] }}
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>
                                            Status
                                        </th>

                                        <td>
                                            {{ $guru['status'] }}
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>



            {{-- Keahlian --}}
            <div class="col-lg-5">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4 p-lg-5">

                        <h2 class="fw-bold mb-4">
                            Keahlian
                        </h2>


                        @foreach($guru['keahlian'] as $keahlian)

                            <div
                                class="d-flex align-items-center
                                       border rounded-3 p-3 mb-3"
                            >

                                <div class="me-3 fs-4">
                                    ✓
                                </div>

                                <div>
                                    {{ $keahlian }}
                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- ================= PENDIDIKAN ================= --}}
<section class="bg-light py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Latar Belakang Pendidikan
            </h2>

            <p class="text-muted">
                Informasi pendidikan dan bidang pengajaran.
            </p>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-5">

                        <div class="row align-items-center">

                            <div class="col-md-2 text-center">

                                <div class="display-3">
                                    🎓
                                </div>

                            </div>


                            <div class="col-md-10">

                                <h4 class="fw-bold">
                                    {{ $guru['pendidikan'] }}
                                </h4>

                                <p class="text-primary fw-semibold mb-2">
                                    {{ $guru['universitas'] }}
                                </p>

                                <p class="text-muted mb-0">

                                    Latar belakang pendidikan tersebut
                                    mendukung proses pengajaran

                                    {{ $guru['mata_pelajaran'] }}

                                    di Pocinui.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- ================= PENGALAMAN ================= --}}
<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Pengalaman Mengajar
            </h2>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card border-0 shadow-sm">

                    <div class="card-body text-center p-5">

                        <div class="display-3">
                            👨‍🏫
                        </div>

                        <h2 class="fw-bold text-primary mt-3">

                            {{ $guru['pengalaman'] }}

                        </h2>

                        <p class="text-muted">

                            pengalaman dalam mengajar

                            {{ $guru['mata_pelajaran'] }}

                            dan mendampingi siswa memahami
                            berbagai materi pembelajaran.

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
            Tertarik Belajar Bersama
            {{ $guru['nama'] }} ?
        </h2>

        <p class="lead mt-3">

            Lihat program belajar Pocinui
            untuk mendapatkan informasi selengkapnya.

        </p>


        <div class="mt-4">

            <a
                href="{{ route('program') }}"
                class="btn btn-light btn-lg me-2"
            >
                Lihat Program
            </a>


            <a
                href="{{ route('guru') }}"
                class="btn btn-outline-light btn-lg"
            >
                Kembali ke Guru
            </a>

        </div>

    </div>

</section>

@endsection