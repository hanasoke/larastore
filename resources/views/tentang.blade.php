@extends('layouts.app')

@section('title', 'Tentang Kami - Pocinui')

@section('content')

{{-- ================= HERO ================= --}}
<section class="bg-primary text-white py-5">
    <div class="container py-4">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <h1 class="display-4 fw-bold">
                    Tentang Pocinui
                </h1>

                <p class="lead mt-3">
                    Bimbingan belajar yang hadir untuk membantu siswa
                    belajar dengan lebih nyaman, terarah, dan menyenangkan.
                </p>

            </div>

            <div class="col-lg-5 text-center mt-4 mt-lg-0">

                <img
                    src="{{ asset('images/bimbel/2.png') }}"
                    alt="Tentang Pocinui"
                    class="img-fluid rounded shadow"
                >

            </div>

        </div>

    </div>
</section>


{{-- ================= SEJARAH ================= --}}
<section class="py-5">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <h2 class="fw-bold mb-4">
                    Awal Berdirinya Pocinui
                </h2>

                <p class="text-muted">
                    Pocinui merupakan bimbingan belajar yang baru berdiri
                    pada tahun ini dengan tujuan menghadirkan tempat belajar
                    yang lebih dekat dengan kebutuhan siswa.
                </p>

                <p class="text-muted">
                    Pocinui berawal dari sebuah gagasan sederhana:
                    bahwa proses belajar seharusnya tidak hanya berisi
                    hafalan dan latihan soal, tetapi juga membantu siswa
                    benar-benar memahami konsep dari setiap materi.
                </p>

                <p class="text-muted">
                    Meskipun masih tergolong baru, Pocinui dibangun
                    dengan semangat untuk terus berkembang,
                    mendengarkan kebutuhan siswa, serta memberikan
                    pelayanan belajar yang berkualitas.
                </p>

            </div>


            <div class="col-lg-6">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-5">

                        <h4 class="fw-bold text-primary">
                            Tahun Pertama, Semangat Besar
                        </h4>

                        <p class="text-muted mt-3 mb-0">
                            Kami percaya bahwa usia sebuah bimbingan belajar
                            bukan satu-satunya ukuran kualitas. Hal terpenting
                            adalah komitmen dalam membantu siswa memahami
                            pelajaran dan berkembang secara akademik.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= VISI MISI ================= --}}
<section class="bg-light py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Visi dan Misi Kami
            </h2>

            <p class="text-muted">
                Pocinui ingin menjadi tempat belajar yang nyaman
                sekaligus memberikan dampak positif bagi siswa.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-lg-6">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body p-5">

                        <h3 class="fw-bold text-primary">
                            Visi
                        </h3>

                        <p class="text-muted mt-3">
                            Menjadi bimbingan belajar yang membantu siswa
                            memahami pelajaran dengan cara yang lebih
                            sederhana, efektif, dan menyenangkan.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body p-5">

                        <h3 class="fw-bold text-primary">
                            Misi
                        </h3>

                        <ul class="text-muted mt-3">

                            <li class="mb-2">
                                Memberikan pembelajaran yang mudah dipahami.
                            </li>

                            <li class="mb-2">
                                Membantu siswa meningkatkan rasa percaya diri
                                dalam belajar.
                            </li>

                            <li class="mb-2">
                                Menyediakan pengajar sesuai bidang
                                mata pelajaran.
                            </li>

                            <li>
                                Menciptakan lingkungan belajar yang nyaman
                                dan suportif.
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= KUALITAS PENGAJARAN ================= --}}
<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Kualitas Pengajaran
            </h2>

            <p class="text-muted">
                Kami berusaha memberikan pengalaman belajar
                yang terarah dan mudah dipahami.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-md-3">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <div class="display-4 mb-3">
                            👨‍🏫
                        </div>

                        <h5 class="fw-bold">
                            Pengajar Sesuai Bidang
                        </h5>

                        <p class="text-muted mb-0">
                            Setiap mata pelajaran dibimbing oleh pengajar
                            yang memahami bidang yang diajarkan.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-3">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <div class="display-4 mb-3">
                            📚
                        </div>

                        <h5 class="fw-bold">
                            Materi Terstruktur
                        </h5>

                        <p class="text-muted mb-0">
                            Materi disusun secara bertahap agar siswa
                            tidak merasa terbebani.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-3">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <div class="display-4 mb-3">
                            💬
                        </div>

                        <h5 class="fw-bold">
                            Interaktif
                        </h5>

                        <p class="text-muted mb-0">
                            Siswa dapat bertanya dan berdiskusi
                            saat ada materi yang belum dipahami.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-3">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <div class="display-4 mb-3">
                            🎯
                        </div>

                        <h5 class="fw-bold">
                            Fokus Perkembangan
                        </h5>

                        <p class="text-muted mb-0">
                            Proses belajar diarahkan untuk membantu
                            siswa berkembang secara bertahap.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= METODE BELAJAR ================= --}}
<section class="bg-light py-5">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <h2 class="fw-bold">
                    Pendekatan Belajar Pocinui
                </h2>

                <p class="text-muted mt-3">
                    Kami tidak hanya mengejar banyaknya materi yang selesai,
                    tetapi juga memperhatikan pemahaman siswa.
                </p>

                <p class="text-muted">
                    Guru berusaha menjelaskan materi dari konsep dasar,
                    memberikan contoh, kemudian melanjutkan dengan
                    latihan soal dan evaluasi.
                </p>

            </div>


            <div class="col-lg-6">

                <div class="list-group shadow-sm">

                    <div class="list-group-item p-4">
                        <h5 class="fw-bold">
                            1. Penjelasan Konsep
                        </h5>

                        <p class="text-muted mb-0">
                            Siswa memahami dasar materi terlebih dahulu.
                        </p>
                    </div>

                    <div class="list-group-item p-4">
                        <h5 class="fw-bold">
                            2. Contoh Soal
                        </h5>

                        <p class="text-muted mb-0">
                            Guru memberikan contoh penerapan konsep.
                        </p>
                    </div>

                    <div class="list-group-item p-4">
                        <h5 class="fw-bold">
                            3. Latihan
                        </h5>

                        <p class="text-muted mb-0">
                            Siswa mencoba mengerjakan latihan secara mandiri.
                        </p>
                    </div>

                    <div class="list-group-item p-4">
                        <h5 class="fw-bold">
                            4. Evaluasi
                        </h5>

                        <p class="text-muted mb-0">
                            Hasil belajar dievaluasi untuk melihat
                            perkembangan siswa.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= TESTIMONI ================= --}}
<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Testimoni Siswa
            </h2>

            <p class="text-muted">
                Beberapa pengalaman positif selama mengikuti
                pembelajaran di Pocinui.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-lg-4">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <div class="mb-3 fs-4">
                            ⭐⭐⭐⭐⭐
                        </div>

                        <p class="fst-italic text-muted">
                            "Penjelasan gurunya mudah dipahami.
                            Materi yang sebelumnya terasa sulit
                            jadi lebih mudah dimengerti."
                        </p>

                        <hr>

                        <h6 class="fw-bold mb-0">
                            Siswa SMP
                        </h6>

                    </div>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <div class="mb-3 fs-4">
                            ⭐⭐⭐⭐⭐
                        </div>

                        <p class="fst-italic text-muted">
                            "Saya lebih nyaman bertanya karena suasana
                            belajarnya tidak membuat tegang."
                        </p>

                        <hr>

                        <h6 class="fw-bold mb-0">
                            Siswa SMA
                        </h6>

                    </div>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <div class="mb-3 fs-4">
                            ⭐⭐⭐⭐⭐
                        </div>

                        <p class="fst-italic text-muted">
                            "Latihan soalnya membantu saya lebih siap
                            menghadapi tugas dan ujian di sekolah."
                        </p>

                        <hr>

                        <h6 class="fw-bold mb-0">
                            Siswa SMA
                        </h6>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= KOMITMEN ================= --}}
<section class="bg-primary text-white py-5">

    <div class="container text-center">

        <h2 class="fw-bold">
            Kami Masih Baru, Tetapi Kami Terus Bertumbuh
        </h2>

        <p class="lead mt-3">
            Pocinui akan terus meningkatkan kualitas pengajaran,
            materi belajar, dan pelayanan untuk memberikan
            pengalaman belajar yang semakin baik.
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
                Lihat Guru
            </a>

        </div>

    </div>

</section>

@endsection