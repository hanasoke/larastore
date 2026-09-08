 <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-warning navbar-white">
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
                    <a 
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" 
                        href="{{ route('home') }}"
                    >
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Tentang
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('program') ? 'active' : '' }}" 
                    href="{{ route('program') }}"
                    >
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