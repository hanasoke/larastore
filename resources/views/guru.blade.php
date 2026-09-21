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

        @foreach($guru as $slug => $item)

            <div class="col-lg-4 col-md-6">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="{{ asset($item->foto) }}"
                        class="card-img-top"
                        alt="{{ $item->nama }}"
                        style="
                            height: 300px; 
                            object-fit: cover;
                        "
                    >

                    <div class="card-body text-center">

                        <div class="d-flex align-items-center mb-3">

                            <img
                                src="{{ asset($item->icon) }}"
                                alt="{{ $item->mata_pelajaran }}"
                                width="35"
                                height="35"
                                class="me-2"
                            >

                            <span class="badge bg-primary">
                                {{ $item->mata_pelajaran }}
                            </span>

                        </div>

                        

                        <h4 class="fw-bold">
                            {{ $item->nama }}
                            {{ $item->gelar }}
                        </h4>

                        <p class="text-muted">
                            {{ $item->deskripsi }}
                        </p>

                    </div>

                    <div class="card-footer bg-white border-0 p-3">
                        <a 
                            href="{{ route('guru.detail', $slug) }}"
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