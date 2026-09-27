@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil - Pocinui')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div
                    class="card border-0 shadow
                           text-center"
                >
                    <div class="card-body p-5">
                        <div
                            class="text-success mb-3"
                            style="font-size: 80px;"
                        >
                            ✓
                        </div>
                        <h1 class="fw-bold">
                            Pendaftaran Berhasil
                        </h1>
                        <p class="lead text-muted mt-3">
                            Data pendaftaran Anda telah
                            berhasil diterima oleh Pocinui.
                        </p>
                        <p class="text-muted">
                            Tim kami akan memeriksa data
                            pendaftaran dan menghubungi Anda
                            melalui informasi kontak yang
                            diberikan.
                        </p>
                        <div class="mt-4">
                            <a
                                href="{{ route('program') }}"
                                class="btn btn-primary"
                            >
                                Lihat Program
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection