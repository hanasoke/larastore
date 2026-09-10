@extends('layouts.app')

@section('title', 'Kontak - Pocinui')

@section('content')


{{-- ================= HERO ================= --}}

<section class="bg-primary text-white py-5">

    <div class="container text-center py-4">

        <h1 class="display-4 fw-bold">
            Hubungi Pocinui
        </h1>

        <p class="lead mt-3">

            Punya pertanyaan mengenai program belajar,
            jadwal, guru, atau pendaftaran?

            Silakan hubungi kami melalui formulir berikut.

        </p>

    </div>

</section>



{{-- ================= KONTAK ================= --}}

<section class="py-5">

    <div class="container">

        <div class="row g-5">


            {{-- ================= INFORMASI ================= --}}

            <div class="col-lg-5">

                <h2 class="fw-bold mb-4">
                    Informasi Kontak
                </h2>


                <p class="text-muted">

                    Tim Pocinui siap membantu memberikan
                    informasi mengenai program bimbingan belajar.

                </p>



                <div class="card border-0 shadow-sm mb-3">

                    <div class="card-body p-4">

                        <h5 class="fw-bold">
                            📍 Alamat
                        </h5>

                        <p class="text-muted mb-0">
                            Jalan Sirojul Munir, Ruko Hanagakure, RT 02/ RW 03, Jatiasih / Jatisari, Kota Bekasi, Jawa Barat.
                        </p>

                    </div>

                </div>



                <div class="card border-0 shadow-sm mb-3">

                    <div class="card-body p-4">

                        <h5 class="fw-bold">
                            📧 Email
                        </h5>

                        <p class="text-muted mb-0">
                            infopocinui@pocinui.com
                        </p>

                    </div>

                </div>



                <div class="card border-0 shadow-sm mb-3">

                    <div class="card-body p-4">

                        <h5 class="fw-bold">
                            📱 WhatsApp
                        </h5>

                        <p class="text-muted mb-0">
                            085199679134
                        </p>

                    </div>

                </div>



                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4">

                        <h5 class="fw-bold">
                            🕐 Jam Operasional
                        </h5>

                        <p class="text-muted mb-1">

                            Senin - Jumat

                        </p>

                        <p class="text-muted mb-0">

                            10.00 - 21.00 WIB

                        </p>

                    </div>

                </div>

            </div>



            {{-- ================= FORM ================= --}}

            <div class="col-lg-7">

                <div class="card border-0 shadow">

                    <div class="card-body p-4 p-lg-5">


                        <h2 class="fw-bold mb-4">
                            Kirim Pesan
                        </h2>



                        {{-- SUCCESS MESSAGE --}}

                        @if(session('success'))

                            <div
                                class="alert alert-success alert-dismissible fade show"
                                role="alert"
                            >

                                {{ session('success') }}

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                ></button>

                            </div>

                        @endif



                        {{-- ERROR VALIDASI --}}

                        @if($errors->any())

                            <div
                                class="alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >

                                <strong>
                                    Data belum lengkap.
                                </strong>

                                <ul class="mb-0 mt-2">

                                    @foreach($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>


                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                ></button>

                            </div>

                        @endif



                        <form
                            action="{{ route('kontak.store') }}"
                            method="POST"
                        >

                            @csrf



                            {{-- NAMA --}}

                            <div class="mb-3">

                                <label
                                    for="nama"
                                    class="form-label fw-bold"
                                >

                                    Nama Lengkap

                                </label>


                                <input
                                    type="text"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    id="nama"
                                    name="nama"
                                    value="{{ old('nama') }}"
                                    placeholder="Masukkan nama lengkap"
                                    required
                                >


                                @error('nama')

                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>

                                @enderror

                            </div>



                            {{-- EMAIL --}}

                            <div class="mb-3">

                                <label
                                    for="email"
                                    class="form-label fw-bold"
                                >

                                    Email

                                </label>


                                <input
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="contoh@email.com"
                                    required
                                >


                                @error('email')

                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>

                                @enderror

                            </div>



                            {{-- NOMOR HP --}}

                            <div class="mb-3">

                                <label
                                    for="no_hp"
                                    class="form-label fw-bold"
                                >

                                    Nomor HP / WhatsApp

                                </label>


                                <input
                                    type="text"
                                    class="form-control @error('no_hp') is-invalid @enderror"
                                    id="no_hp"
                                    name="no_hp"
                                    value="{{ old('no_hp') }}"
                                    placeholder="08xxxxxxxxxx"
                                >


                                @error('no_hp')

                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>

                                @enderror

                            </div>



                            {{-- SUBJEK --}}

                            <div class="mb-3">

                                <label
                                    for="subjek"
                                    class="form-label fw-bold"
                                >

                                    Subjek

                                </label>


                                <select
                                    class="form-select @error('subjek') is-invalid @enderror"
                                    id="subjek"
                                    name="subjek"
                                    required
                                >

                                    <option value="">
                                        Pilih subjek
                                    </option>


                                    <option
                                        value="Informasi Program"
                                        {{ old('subjek') == 'Informasi Program' ? 'selected' : '' }}
                                    >
                                        Informasi Program
                                    </option>


                                    <option
                                        value="Pendaftaran"
                                        {{ old('subjek') == 'Pendaftaran' ? 'selected' : '' }}
                                    >
                                        Pendaftaran
                                    </option>


                                    <option
                                        value="Jadwal Belajar"
                                        {{ old('subjek') == 'Jadwal Belajar' ? 'selected' : '' }}
                                    >
                                        Jadwal Belajar
                                    </option>


                                    <option
                                        value="Biaya"
                                        {{ old('subjek') == 'Biaya' ? 'selected' : '' }}
                                    >
                                        Biaya Bimbingan
                                    </option>


                                    <option
                                        value="Lainnya"
                                        {{ old('subjek') == 'Lainnya' ? 'selected' : '' }}
                                    >
                                        Lainnya
                                    </option>

                                </select>


                                @error('subjek')

                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>

                                @enderror

                            </div>



                            {{-- PESAN --}}

                            <div class="mb-4">

                                <label
                                    for="pesan"
                                    class="form-label fw-bold"
                                >

                                    Pesan

                                </label>


                                <textarea
                                    class="form-control @error('pesan') is-invalid @enderror"
                                    id="pesan"
                                    name="pesan"
                                    rows="6"
                                    placeholder="Tuliskan pesan atau pertanyaan..."
                                    required
                                >{{ old('pesan') }}</textarea>


                                @error('pesan')

                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>

                                @enderror

                            </div>



                            <button
                                type="submit"
                                class="btn btn-primary btn-lg w-100"
                            >

                                Kirim Pesan

                            </button>


                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection