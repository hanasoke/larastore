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

            @foreach($guru as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-0 shadow-sm">

                        @if($item->foto)

                            <img
                                src="{{ asset($item->foto) }}"
                                class="card-img-top"
                                alt="{{ $item->nama }}"
                                style="
                                    height: 280px;
                                    object-fit: cover;
                                "
                            >

                        @endif


                        <div class="card-body">

                            {{-- ICON + MAPEL --}}
                            <div
                                class="d-flex align-items-center
                                    mb-3"
                            >

                                @if($item->icon)

                                    <img
                                        src="{{ asset($item->icon) }}"
                                        width="40"
                                        height="40"
                                        class="me-2"
                                        alt="{{ $item->mata_pelajaran }}"
                                    >

                                @endif


                                <span class="badge bg-primary">

                                    {{ $item->mata_pelajaran }}

                                </span>

                            </div>


                            {{-- NAMA --}}
                            <h4 class="fw-bold">

                                {{ $item->nama }}

                                @if($item->gelar)
                                    , {{ $item->gelar }}
                                @endif

                            </h4>


                            {{-- DESKRIPSI --}}
                            <p class="text-muted">

                                {{ \Illuminate\Support\Str::limit(
                                    $item->deskripsi,
                                    100
                                ) }}

                            </p>

                        </div>


                        <div
                            class="card-footer
                                bg-white border-0 p-3"
                        >

                            <a
                                href="{{ route(
                                    'guru.detail',
                                    $item->slug
                                ) }}"
                                class="btn btn-primary w-100"
                            >
                                Lihat Detail Guru
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

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