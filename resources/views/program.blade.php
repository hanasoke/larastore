@extends('layouts.app')

@section('title', 'Program Belajar - Pocinui')

@section('content')

<section class="bg-primary text-white py-5">

    <div class="container text-center">

        <h1 class="fw-bold">
            Program Belajar Pocinui
        </h1>

        <p class="lead">
            Pilih program belajar sesuai
            jenjang dan mata pelajaran.
        </p>

    </div>

</section>


<section class="py-5">

    <div class="container">

        <div class="row g-4">

            @forelse($programs as $program)

                <div class="col-lg-4 col-md-6">

                    <div
                        class="card h-100
                               border-0 shadow-sm"
                    >

                        @if($program->gambar)

                            <img
                                src="{{ asset($program->gambar) }}"
                                class="card-img-top"
                                alt="{{ $program->nama_program }}"
                                style="
                                    height: 220px;
                                    object-fit: cover;
                                "
                            >

                        @endif


                        <div class="card-body">

                            <div
                                class="d-flex
                                       align-items-center
                                       mb-3"
                            >

                                @if($program->icon)

                                    <img
                                        src="{{ asset($program->icon) }}"
                                        width="45"
                                        height="45"
                                        class="me-3"
                                        alt=""
                                    >

                                @endif


                                <span class="badge bg-primary">

                                    {{ $program->jenjang }}

                                </span>

                            </div>


                            <h4 class="fw-bold">

                                {{ $program->nama_program }}

                            </h4>


                            <p class="text-muted">

                                {{ $program->deskripsi }}

                            </p>


                            <p>

                                <strong>
                                    Jadwal:
                                </strong>

                                {{ $program->jadwal ?? '-' }}

                            </p>


                            <h5
                                class="text-primary
                                       fw-bold"
                            >

                                Rp{{ number_format(
                                    $program->harga,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                            </h5>

                        </div>


                        <div
                            class="card-footer
                                   bg-white border-0"
                        >

                            <a
                                href="{{ route(
                                    'program.detail',
                                    $program->slug
                                ) }}"
                                class="btn btn-primary w-100"
                            >
                                Lihat Program
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div
                        class="alert alert-info
                               text-center"
                    >
                        Belum ada program tersedia.
                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>

@endsection