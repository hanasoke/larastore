<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Pocinui')
    </title>

    @vite([
        'resources/css/app.css', 
        'resources/js/app.js'
    ])
</head>

<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Isi halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer') 

</body>
</html>