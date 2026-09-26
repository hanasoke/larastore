@extends('layouts.app')

@section('title', 'Pendaftaran - Pocinui')

@section('content')

<section class="bg-primary text-white py-5">

    <div class="container text-center">

        <h1 class="fw-bold">
            Pendaftaran Siswa
        </h1>

        <p class="lead">
            Daftar program bimbingan belajar Pocinui.
        </p>

    </div>

</section>


<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                {{-- VALIDATION ERROR --}}
                @if($errors->any())

                    <div class="alert alert-danger">

                        <strong>
                            Pendaftaran belum dapat dikirim.
                        </strong>

                        <ul class="mb-0 mt-2">

                            @foreach($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                <div class="card border-0 shadow">

                    <div class="card-body p-4 p-md-5">

                        <h3 class="fw-bold mb-4">
                            Form Pendaftaran
                        </h3>


                        <form
                            action="{{ route('pendaftaran.store') }}"
                            method="POST"
                        >

                            @csrf


                            {{-- PROGRAM --}}
                            <div class="mb-4">

                                <label
                                    for="program_id"
                                    class="form-label fw-bold"
                                >
                                    Program Belajar
                                </label>


                                <select
                                    name="program_id"
                                    id="program_id"
                                    class="form-select
                                           @error('program_id')
                                           is-invalid
                                           @enderror"
                                    required
                                >

                                    <option value="">
                                        -- Pilih Program --
                                    </option>


                                    @foreach($programs as $program)

                                        <option
                                            value="{{ $program->id }}"

                                            @selected(
                                                old(
                                                    'program_id',
                                                    $selectedProgram?->id
                                                ) == $program->id
                                            )
                                        >

                                            {{ $program->nama_program }}
                                            -
                                            {{ $program->jenjang }}

                                        </option>

                                    @endforeach

                                </select>


                                @error('program_id')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


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
                                    name="nama"
                                    id="nama"
                                    value="{{ old('nama') }}"
                                    class="form-control
                                           @error('nama')
                                           is-invalid
                                           @enderror"
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
                                    name="email"
                                    id="email"
                                    value="{{ old('email') }}"
                                    class="form-control
                                           @error('email')
                                           is-invalid
                                           @enderror"
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
                                    name="no_hp"
                                    id="no_hp"
                                    value="{{ old('no_hp') }}"
                                    class="form-control
                                           @error('no_hp')
                                           is-invalid
                                           @enderror"
                                    required
                                >

                                @error('no_hp')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- JENIS KELAMIN --}}
                            <div class="mb-3">

                                <label
                                    for="jenis_kelamin"
                                    class="form-label fw-bold"
                                >
                                    Jenis Kelamin
                                </label>

                                <select
                                    name="jenis_kelamin"
                                    id="jenis_kelamin"
                                    class="form-select
                                           @error('jenis_kelamin')
                                           is-invalid
                                           @enderror"
                                    required
                                >

                                    <option value="">
                                        -- Pilih --
                                    </option>

                                    <option
                                        value="Laki-laki"
                                        @selected(
                                            old('jenis_kelamin')
                                            === 'Laki-laki'
                                        )
                                    >
                                        Laki-laki
                                    </option>

                                    <option
                                        value="Perempuan"
                                        @selected(
                                            old('jenis_kelamin')
                                            === 'Perempuan'
                                        )
                                    >
                                        Perempuan
                                    </option>

                                </select>

                                @error('jenis_kelamin')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- SEKOLAH --}}
                            <div class="mb-3">

                                <label
                                    for="sekolah"
                                    class="form-label fw-bold"
                                >
                                    Asal Sekolah
                                </label>

                                <input
                                    type="text"
                                    name="sekolah"
                                    id="sekolah"
                                    value="{{ old('sekolah') }}"
                                    class="form-control
                                           @error('sekolah')
                                           is-invalid
                                           @enderror"
                                    required
                                >

                                @error('sekolah')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- KELAS --}}
                            <div class="mb-3">

                                <label
                                    for="kelas"
                                    class="form-label fw-bold"
                                >
                                    Kelas
                                </label>

                                <select
                                    name="kelas"
                                    id="kelas"
                                    class="form-select
                                           @error('kelas')
                                           is-invalid
                                           @enderror"
                                    required
                                >

                                    <option value="">
                                        -- Pilih Kelas --
                                    </option>

                                    @foreach([
                                        '4 SD',
                                        '5 SD',
                                        '6 SD',
                                        '7 SMP',
                                        '8 SMP',
                                        '9 SMP',
                                        '10 SMA',
                                        '11 SMA',
                                        '12 SMA'
                                    ] as $kelas)

                                        <option
                                            value="{{ $kelas }}"
                                            @selected(
                                                old('kelas') === $kelas
                                            )
                                        >
                                            {{ $kelas }}
                                        </option>

                                    @endforeach

                                </select>

                                @error('kelas')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- ALAMAT --}}
                            <div class="mb-4">

                                <label
                                    for="alamat"
                                    class="form-label fw-bold"
                                >
                                    Alamat
                                </label>

                                <textarea
                                    name="alamat"
                                    id="alamat"
                                    rows="4"
                                    class="form-control
                                           @error('alamat')
                                           is-invalid
                                           @enderror"
                                >{{ old('alamat') }}</textarea>

                                @error('alamat')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <button
                                type="submit"
                                class="btn btn-primary btn-lg w-100"
                            >
                                Kirim Pendaftaran
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection