    @extends('admin.layout.app')

    @section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar bg-primary me-3">
                                        {{-- Memastikan ikon di tengah avatar menggunakan CSS kustom --}}
                                        <span class="avatar-content">
                                            <i class="bi bi-kanban-fill text-white fs-4"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted font-semibold">Total Project</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalProjects }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar bg-success me-3">
                                        {{-- Memastikan ikon di tengah avatar menggunakan CSS kustom --}}
                                        <span class="avatar-content">
                                            <i class="bi bi-people-fill text-white fs-4"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted font-semibold">Total Tim</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalTeams }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar bg-warning me-3">
                                        {{-- Memastikan ikon di tengah avatar menggunakan CSS kustom --}}
                                        <span class="avatar-content">
                                            <i class="bi bi-person-lines-fill text-white fs-4"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted font-semibold">Total User</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalUsers }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tambahan konten lain jika diperlukan -->
            </div>
        </section>
    </div>
    @endsection

    {{-- Tambahkan gaya CSS kustom di sini --}}
    <style>
        /* Umum untuk semua avatar */
        .avatar {
            width: 3rem; /* Ukuran avatar standar */
            height: 3rem;
            border-radius: 50%; /* Membuat bentuk lingkaran */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0; /* Mencegah avatar menyusut */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sedikit bayangan untuk kedalaman */
        }

        /* Konten di dalam avatar (ikon) */
        .avatar-content {
            /* Properti ini yang memastikan ikon berada di tengah */
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%; /* Memastikan span mengisi avatar */
            height: 100%; /* Memastikan span mengisi avatar */
        }

        /* Ikon di dalam avatar-content */
        .avatar-content i {
            font-size: 1.5rem; /* Ukuran ikon yang lebih besar dan jelas */
            color: #ffffff; /* Memastikan warna ikon putih */
            line-height: 1; /* Mengatur line-height untuk penempatan vertikal yang lebih baik */
        }

        /* Penyesuaian padding kartu untuk tampilan yang lebih rapi */
        .card-body.px-4.py-4-5 {
            padding: 1.25rem 1.5rem; /* Sedikit lebih banyak padding untuk tampilan yang lebih lega */
        }

        /* Penyesuaian teks di samping avatar */
        .text-muted.font-semibold {
            font-size: 0.9rem; /* Ukuran font sedikit lebih kecil untuk judul */
            margin-bottom: 0.2rem; /* Spasi kecil antara judul dan angka */
        }

        .font-extrabold.mb-0 {
            font-size: 1.5rem; /* Ukuran font lebih besar untuk angka */
            font-weight: 800; /* Lebih tebal */
        }
    </style>
