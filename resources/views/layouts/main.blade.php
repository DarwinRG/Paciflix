<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paciflix | 🌊Your ocean of entertainment🍿</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <livewire:styles />
</head>

<body class="bg-dark text-white">
    <nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-lg">
        <div class="container">
            <a class="fw-bold ms-4" href="{{ route('movies.index') }}">
                <img src="{{ asset('logo.png') }}" alt="Paciflix" class="d-inline-block align-text-top" height="100" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarOne" aria-controls="#navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarOne">
                <ul class="navbar-nav ms-auto mb-2 mt-2 mb-lg-0 me-4 align-items-center">
                    <li class="nav-item">
                        <a href="{{ route('movies.index') }}" class="nav-link fw-bold" style="color: #08bffb">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tv.index') }}" class="nav-link fw-bold" style="color: #08bffb">TV Shows</a>
                    </li>
                    <li class="nav-item mb-3">
                        <livewire:search-dropdown />
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link fw-bold btn btn-link" style="color: #08bffb; display: block;">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-2 bg-dark">
        @yield('content')
    </main>

    <footer class="bg-dark text-white mt-auto py-4">
        <div class="container text-center">
            <div class="fw-bold">
                Made with ❤️ by <a href="https://darwinrg.tech" class="text-decoration-none" style="color: #08bffb">DarwinRG</a>
            </div>
            <span></span>
            <span class="text-muted">© 2024 Paciflix. All rights reserved.</span>
            <div class="fw-light">Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.</div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <livewire:scripts />
    @yield('scripts')
</body>

</html>