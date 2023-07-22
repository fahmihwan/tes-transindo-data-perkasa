<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard">Dashboard </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Kelola Mobil
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item active" href="/mobil">mobil saya</a></li>
                        <li><a class="dropdown-item" href="#">ketersediaan mobil</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Pinjam Mobil
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item active" href="/peminjaman/cek-mobil">sewa mobil sekarang</a></li>
                        <li><a class="dropdown-item" href="#">ketersediaan mobil</a></li>
                        <li><a class="dropdown-item" href="/peminjaman/is-rented">mobil yang sedang di sewa</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <span class="me-3">{{ auth()->user()->username }}</span>

            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-danger">logout</button>
            </form>
        </div>
    </div>
</nav>
