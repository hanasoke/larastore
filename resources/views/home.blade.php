<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Utama</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                Pocinui
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse"
                id="navbarMenu"
            >

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Tentang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Program
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Kontak
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <!-- Hero -->
    <section class="py-5 bg-light">

        <div class="container">

            <div class="row align-items-center min-vh-75">

                <div class="col-lg-6">

                    <h1 class="display-4 fw-bold">
                        Selamat Datang di
                        <span class="text-primary">
                            Pocinui
                        </span>
                    </h1>

                    <p class="lead mt-3">
                        Tempat belajar yang membantu siswa
                        memahami pelajaran dengan lebih mudah,
                        nyaman, dan menyenangkan.
                    </p>

                    <div class="mt-4">

                        <a
                            href="#program"
                            class="btn btn-primary btn-lg me-2"
                        >
                            Lihat Program
                        </a>

                        <a
                            href="#tentang"
                            class="btn btn-outline-primary btn-lg"
                        >
                            Tentang Kami
                        </a>

                    </div>

                </div>


                <div class="col-lg-6 text-center mt-5 mt-lg-0">

                    <img
                        src="{{ asset('images/belajar.jpg') }}"
                        class="img-fluid rounded shadow"
                        alt="Belajar bersama Pocinui"
                        style="max-width: 500px;"
                    >

                </div>

            </div>

        </div>

    </section>


    <!-- Tentang -->
    <section
        class="py-5"
        id="tentang"
    >

        <div class="container text-center">

            <h2 class="fw-bold">
                Mengapa Memilih Pocinui?
            </h2>

            <p class="text-muted">
                Belajar lebih mudah bersama guru yang berpengalaman.
            </p>


            <div class="row mt-5">

                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="card-body">

                            <h4 class="card-title">
                                Guru Berpengalaman
                            </h4>

                            <p class="card-text">
                                Belajar bersama pengajar yang memahami
                                kebutuhan setiap siswa.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="card-body">

                            <h4 class="card-title">
                                Materi Lengkap
                            </h4>

                            <p class="card-text">
                                Materi pembelajaran disusun secara
                                terstruktur dan mudah dipahami.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="card-body">

                            <h4 class="card-title">
                                Belajar Nyaman
                            </h4>

                            <p class="card-text">
                                Lingkungan belajar yang santai tetapi
                                tetap fokus pada perkembangan siswa.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">

        <div class="container">

            <p class="mb-0">
                &copy; {{ date('Y') }} Pocinui.
                Semua Hak Dilindungi.
            </p>

        </div>

    </footer>

</body>
</html>