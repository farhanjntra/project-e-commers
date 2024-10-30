<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('user/library/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/style/main.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* Style tambahan untuk memperbaiki tampilan navbar */
        .navbar-brand img {
            max-height: 60px; /* Pastikan logo tidak terlalu kecil */
        }
        .navbar-nav .nav-link {
            padding: 0 15px; /* Tambahkan jarak antar item menu */
        }
        .icon-for-user img {
            width: 24px; /* Atur ukuran ikon agar seragam */
            height: 24px;
        }
        .search-container {
            display: flex;
            align-items: center;
        }
        .search-container .search {
            width: 200px;
            border-radius: 5px;
            margin-left: 10px; /* Berikan sedikit margin agar tidak menempel */
        }
        .navbar-collapse {
            justify-content: space-between; /* Buat elemen di navbar tersebar dengan baik */
        }
        .ms-auto {
            margin-left: auto !important; /* Pastikan elemen berada di ujung kanan */
        }
    </style>
    <title>Hijabef Online Store</title>
</head>
<body>

    <header>
        <nav class="main-nav navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo2.PNG') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Product
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="productDropdown">
                                <li><a class="dropdown-item" href="#">Pashmina</a></li>
                                <li><a class="dropdown-item" href="#">Hijab Instan</a></li>
                                <li><a class="dropdown-item" href="#">Hijab Segi Empat</a></li>
                                <li><a class="dropdown-item" href="#">Clean Hijab</a></li>
                                <li><a class="dropdown-item" href="#">Hijab Sport</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/new">New Arrival</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/seller">Best Seller</a>
                        </li>
                    </ul>

                    <!-- Pindahkan pencarian dan ikon user ke bagian kanan -->
                    <div class="d-flex align-items-center ms-auto">
                        <!-- Ikon Pencarian -->
                        <div class="search-container me-3">
                            <a class="nav-link" href="#">
                                <img src="{{ asset('user/assets/icons/search.svg') }}" alt="search">
                            </a>
                            <input type="search" class="search" placeholder="Cari...">
                        </div>

                        <!-- Ikon User dan Dropdown -->
                        <div class="icon-for-user d-flex align-items-center position-relative">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('user/assets/icons/person.svg') }}" alt="person">
                            </a>
                            @if(Auth::check())
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <li>
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            </ul>
                            @else
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                            </ul>
                            @endif
                        </div>

                        <!-- Ikon Keranjang -->
                        <a href="#">
                            <img src="{{ asset('user/assets/icons/shop-bag.svg') }}" alt="shop bag">
                        </a>
                    </div>

                </div>
            </div>
        </nav>
    </header><!-- /header -->

    <main>
        @yield('content')
    </main><!--main-->

    <footer>
        <!-- Footer Content -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
