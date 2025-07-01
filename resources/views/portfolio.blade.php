<section id="portfolio" class="contact section" data-aos="fade-up">
    <div class="container section-title">
        <h2>Portfolio</h2>
        <div>
            <span>Jelajahi</span>
            <span class="description-title"> Portfolio Kami</span>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            {{-- Loop untuk menampilkan 8 portfolio --}} @for ($i = 1; $i <= 8;
            $i++)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    {{-- Carousel untuk banyak gambar --}}
                    <div
                        id="portfolioCarousel{{ $i }}"
                        class="carousel slide"
                        data-bs-ride="carousel"
                    >
                        <div class="carousel-inner">
                            {{-- Contoh gambar untuk setiap slide --}}
                            <div class="carousel-item active">
                                <img
                                    src="{{asset('images/villa-nusa-dua.jpeg')}}"
                                    class="d-block w-100"
                                    alt="Proyek {{ $i }} Gambar 1"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                    src="{{asset('images/villa-nusa-dua.jpeg')}}"
                                    class="d-block w-100"
                                    alt="Proyek {{ $i }} Gambar 2"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                    src="{{asset('images/villa-nusa-dua.jpeg')}}"
                                    class="d-block w-100"
                                    alt="Proyek {{ $i }} Gambar 3"
                                />
                            </div>
                        </div>
                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#portfolioCarousel{{ $i }}"
                            data-bs-slide="prev"
                        >
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#portfolioCarousel{{ $i }}"
                            data-bs-slide="next"
                        >
                            <span
                                class="carousel-control-next-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Villa {{ $i }}</h5>
                        <!-- <p class="card-text text-muted">
                            Lokasi: Nusa Dua, Bali
                        </p> -->
                        <p class="card-text">
                            Civil, MEP, Interior
                        </p>
                       <a
                            href="/portfolio/{{$i}}"
                            class="btn btn-primary btn-sm"
                        >
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            @endfor
        </div>
    </div>
    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="700">
            <a href="/portfolio" class="btn-get-started">Lihat Semua Portfolio</a>
        </div>
</section>
<style>
    /* public/css/app.css atau di dalam <style> di layout Anda */

    #portfolio {
        background-color: #f8f9fa; /* Warna latar belakang yang lembut */
    }

    #portfolio .card {
        border: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px; /* Menambahkan border-radius untuk kartu */
        overflow: hidden; /* Penting agar border-radius berfungsi pada gambar */
    }

    #portfolio .card:hover {
        transform: translateY(-5px); /* Efek angkat saat hover */
        box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.18) !important; /* Bayangan lebih kuat dan menyebar saat hover */
    }

    #portfolio .card img {
        height: 250px; /* Tinggi gambar carousel yang seragam */
        object-fit: cover; /* Memastikan gambar mengisi area tanpa terdistorsi */
        /* inherit border-top-left-radius dan border-top-right-radius dari parent card */
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
    }

    #portfolio .card-title {
        color: #018880; /* Warna judul yang lebih menonjol, disesuaikan dengan tema */
        font-weight: bold;
    }

    /* --- MULAI PERBAIKAN TOMBOL "Lihat Detail" PADA KARTU (WARNA #018880) --- */
    #portfolio .btn-primary {
        background-color: #018880; /* Warna hijau toska */
        border-color: #018880;
        font-weight: 500; /* Sedikit lebih tebal */
        padding: 8px 20px; /* Padding yang lebih baik */
        border-radius: 5px; /* Sedikit membulat */
        transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }

    #portfolio .btn-primary:hover {
        background-color: #006b60; /* Warna hijau toska yang sedikit lebih gelap saat hover */
        border-color: #006b60;
        transform: translateY(-1px); /* Efek angkat ringan */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow ringan saat hover */
    }
    /* --- AKHIR PERBAIKAN TOMBOL "Lihat Detail" --- */


    /* --- MULAI Kustomisasi Carousel Controls (Panah Navigasi) (WARNA #018880) --- */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(1, 136, 128, 0.6); /* Warna hijau toska transparan */
        border-radius: 50%;
        padding: 12px; /* Ukuran padding ikon */
        width: 40px; /* Ukuran icon */
        height: 40px; /* Ukuran icon */
        display: flex; /* Untuk memposisikan icon SVG di tengah */
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }

    .carousel-control-prev:hover .carousel-control-prev-icon,
    .carousel-control-next:hover .carousel-control-next-icon {
        background-color: rgba(1, 136, 128, 0.8); /* Lebih gelap saat hover */
    }

    .carousel-control-prev, .carousel-control-next {
        width: 15%; /* Mengurangi lebar area klik panah agar tidak terlalu mengganggu */
    }
    /* --- AKHIR Kustomisasi Carousel Controls --- */

    /* Kustomisasi Modal */
    .modal-content {
        border-radius: 10px;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); /* Shadow pada modal */
    }

    .modal-header {
        border-bottom: none;
        padding-bottom: 0; /* Mengurangi padding bawah header */
    }

    .modal-title {
        color: #333; /* Warna judul modal */
        font-weight: 600;
    }

    .modal-body img {
        max-height: 450px; /* Tinggi gambar di modal */
        object-fit: contain; /* Gambar akan menyesuaikan tanpa terpotong */
        border-radius: 5px; /* Sedikit rounded pada gambar modal */
    }

    /* --- MULAI PERBAIKAN TOMBOL TUTUP MODAL (WARNA #018880) --- */
    .modal-footer .btn-secondary {
        background-color: #018880; /* Warna hijau toska */
        border-color: #018880;
        font-weight: 500;
        padding: 8px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }

    .modal-footer .btn-secondary:hover {
        background-color: #006b60; /* Warna hijau toska lebih gelap saat hover */
        border-color: #006b60;
        transform: translateY(-1px); /* Efek angkat ringan */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow ringan saat hover */
    }
    /* --- AKHIR PERBAIKAN TOMBOL TUTUP MODAL --- */
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var carousels = document.querySelectorAll(".carousel");
        carousels.forEach(function (carousel) {
            // Ini akan mengatur interval untuk semua carousel secara manual
            // Ganti 8000 dengan kecepatan yang Anda inginkan dalam milidetik
            new bootstrap.Carousel(carousel, {
                interval: 8000,
            });
        });

        var portfolioModals = document.querySelectorAll(".modal");
        portfolioModals.forEach(function (modal) {
            modal.addEventListener("shown.bs.modal", function () {
                var modalCarousel = this.querySelector(".carousel");
                if (modalCarousel) {
                    var bsCarousel =
                        bootstrap.Carousel.getInstance(modalCarousel);
                    if (bsCarousel) {
                        bsCarousel.to(0);
                    }
                }
            });
        });
    });
</script>