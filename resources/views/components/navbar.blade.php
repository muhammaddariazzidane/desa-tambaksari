<nav class="navbar sticky-top mb-1 navbar-expand-lg bg-primary py-2 navbar-dark" x-data='{open : false}'>
    <div class="container">
        <div class="d-flex align-items-center ">
            <div style="width: 2.6rem">
                <img src="/img/logo.png" class="img-fluid" alt="">
            </div>
            <div class="d-flex flex-column">
                <span class="text-white fs-5 fw-semibold text-uppercase ms-2">Desa Tambaksari</span>
                <span class="text-white ms-2 text-uppercase">Kec. tirtajaya kab. karawang</span>
            </div>
        </div>
        <button @click="open = ! open" class="navbar-toggler " type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fas  text-white fs-2" x-bind:class="open ? 'fa-times' : 'fa-bars'"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-white " aria-current="page" href="#">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profile Desa
                    </a>
                    <ul class="dropdown-menu border-0 shadow">
                        <li><a class="dropdown-item" href="#">Sejarah desa</a></li>
                        <li><a class="dropdown-item" href="#">Visi Misi</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Kelembagaan
                    </a>
                    <ul class="dropdown-menu border-0 shadow">
                        <li><a class="dropdown-item" href="#">Karang taruna</a></li>
                        {{-- <li><a class="dropdown-item" href="#">Visi Misi</a></li> --}}

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " aria-current="page" href="#">Kegiatan</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Cari berita..."
                            aria-label="Recipient's username with two button addons">
                        <button class="btn btn-warning" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
