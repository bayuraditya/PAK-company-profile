<section id="portfolio" class="portfolio section">
    <div class="container section-title">
        <h2>Portfolio</h2>
        <div>
            <span>Jelajahi</span>
            <span class="description-title">Portfolio Kami</span>
        </div>
    </div>
    <div class="container">
        {{-- Filter Kategori --}}
        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-konstruksi">Konstruksi</li>
            <li data-filter=".filter-renovasi">Renovasi</li>
            <li data-filter=".filter-desain">Desain Interior</li>
            <li data-filter=".filter-infrastruktur">Infrastruktur</li>
            {{-- Anda bisa menambahkan lebih banyak kategori di sini --}}
        </ul>
        <div class="row isotope-container gy-4" data-aos="fade-up" data-aos-delay="200">

            {{-- Data Dummy Project (akan diganti dengan data compact dari Controller) --}}
            @php
                $projects = [
                    [
                        'title' => 'Gedung Perkantoran Maju',
                        'category' => 'Konstruksi Bangunan',
                        'filter_class' => 'filter-konstruksi',
                        'image' => 'images/portfolio/villa-nusa-dua.jpeg', // Gunakan gambar sementara
                        'description' => 'Pembangunan gedung perkantoran modern di pusat bisnis.',
                    ],
                    [
                        'title' => 'Renovasi Vila Harmoni',
                        'category' => 'Renovasi & Residensial',
                        'filter_class' => 'filter-renovasi',
                        'image' => 'images/portfolio/villa-nusa-dua.jpeg', // Gunakan gambar sementara
                        'description' => 'Renovasi total vila dengan sentuhan desain kontemporer.',
                    ],
                    [
                        'title' => 'Desain Interior Restoran',
                        'category' => 'Desain Interior',
                        'filter_class' => 'filter-desain',
                        'image' => 'images/portfolio/villa-nusa-dua.jpeg', // Gunakan gambar sementara
                        'description' => 'Perancangan interior restoran dengan konsep industrial.',
                    ],
                    [
                        'title' => 'Pembangunan Jalan Layang Baru',
                        'category' => 'Infrastruktur Jalan',
                        'filter_class' => 'filter-infrastruktur',
                        'image' => 'images/portfolio/villa-nusa-dua.jpeg', // Gunakan gambar sementara
                        'description' => 'Proyek strategis pembangunan jalan layang untuk mengurangi kemacetan.',
                    ],
                    [
                        'title' => 'Pusat Logistik Modern',
                        'category' => 'Konstruksi Industri',
                        'filter_class' => 'filter-konstruksi',
                        'image' => 'images/portfolio/villa-nusa-dua.jpeg', // Gunakan gambar sementara
                        'description' => 'Pembangunan pusat distribusi dan logistik berteknologi tinggi.',
                    ],
                    [
                        'title' => 'Renovasi Hotel Bintang Lima',
                        'category' => 'Renovasi & Hospitality',
                        'filter_class' => 'filter-renovasi',
                        'image' => 'images/portfolio/villa-nusa-dua.jpeg', // Gunakan gambar sementara
                        'description' => 'Pembaruan fasilitas dan interior hotel untuk meningkatkan kenyamanan tamu.',
                    ],
                    [
                        'title' => 'Desain Kantor Startup',
                        'category' => 'Desain Interior',
                        'filter_class' => 'filter-desain',
                        'image' => 'images/portfolio/villa-nusa-dua.jpeg', // Gunakan gambar sementara
                        'description' => 'Desain ruang kerja yang dinamis dan kolaboratif untuk perusahaan startup.',
                    ],
                ];
            @endphp

            @foreach ($projects as $project)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $project['filter_class'] }}">
                <div class="portfolio-content h-100">
                    <img
                        src="{{ asset($project['image']) }}"
                        class="img-fluid"
                        alt="{{ $project['title'] }}"
                    />
                    <div class="portfolio-info">
                        <h4>{{ $project['title'] }}</h4>
                        <p>{{ $project['category'] }}</p>
                        <a
                            href="{{ asset($project['image']) }}"
                            title="{{ $project['title'] }}"
                            data-gallery="portfolio-gallery"
                            class="glightbox preview-link"
                        ><i class="bi bi-zoom-in"></i></a>
                        {{-- Link ini bisa mengarah ke halaman detail proyek jika ada --}}
                        <a href="#" title="Detail Lebih Lanjut" class="details-link"
                        ><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- End Looping Portfolio Items --}}

        </div>
        
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="700">
            <a href="#" class="btn-get-started">Lihat Semua Portfolio</a>
        </div>
        </div>
</section>

<style>
   
/* Portfolio Filters */
.portfolio-filters {
    list-style: none;
    padding: 0;
    margin: 0 0 35px 0;
    text-align: center;
}

.portfolio-filters li {
    cursor: pointer;
    display: inline-block;
    margin: 0 10px 10px 10px;
    font-size: 1rem;
    font-weight: 600;
    line-height: 1;
    color: var(--default-color, #555);
    transition: all 0.3s ease;
    padding: 8px 18px;
    border-radius: 4px;
    background-color: #f5f5f5;
}

.portfolio-filters li:hover,
.portfolio-filters li.filter-active {
    background-color: var(--accent-color, #007bff);
    color: #fff;
}

/* Portfolio Items */
.portfolio-item {
    margin-bottom: 30px; /* Spasi antar item */
}

.portfolio-content {
    background-color: #fff;
    border-radius: 10px; /* Rounded border seperti project-item */
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); /* Shadow seperti project-item */
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    height: 100%;
    position: relative; /* Untuk overlay */
}

.portfolio-content:hover {
    transform: translateY(-8px); /* Mengangkat kartu sedikit saat hover */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Shadow lebih menonjol saat hover */
}

.portfolio-content img {
    width: 100%;
    height: 300px; /* Tinggi gambar bisa disesuaikan */
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease; /* Animasi zoom pada gambar */
}

.portfolio-content:hover img {
    transform: scale(1.1); /* Efek zoom in pada gambar saat hover */
}

.portfolio-info {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Overlay hitam transparan */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    padding: 20px;
    opacity: 0;
    transition: opacity 0.4s ease; /* Animasi fade in overlay */
}

.portfolio-content:hover .portfolio-info {
    opacity: 1; /* Overlay muncul saat hover */
}

.portfolio-info h4 {
    font-size: 1.5rem;
    margin-bottom: 5px;
    color: #fff;
    text-align: center;
}

.portfolio-info p {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 20px;
    text-align: center;
}

.portfolio-info .preview-link,
.portfolio-info .details-link {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    border-radius: 50%;
    margin: 0 5px;
    transition: all 0.3s ease-in-out;
    font-size: 1.1rem;
    opacity: 0; /* Awalnya tersembunyi */
    transform: translateY(20px); /* Posisikan di bawah */
    animation: fadeUp 0.6s forwards; /* Animasi muncul dari bawah */
    animation-delay: 0.2s; /* Sedikit delay setelah overlay muncul */
}

.portfolio-info .details-link {
    animation-delay: 0.3s; /* Delay sedikit lebih lama untuk link detail */
}

.portfolio-content:hover .portfolio-info .preview-link,
.portfolio-content:hover .portfolio-info .details-link {
    opacity: 1;
    transform: translateY(0);
}


.portfolio-info .preview-link:hover,
.portfolio-info .details-link:hover {
    background: var(--accent-color, #007bff);
}

/* Re-use keyframes from project section */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    // --- Inisialisasi Isotope untuk Portfolio Filtering ---
    let portfolioContainer = document.querySelector('.isotope-container');
    if (portfolioContainer) {
        let portfolioIsotope = new Isotope(portfolioContainer, {
            itemSelector: '.isotope-item',
            layoutMode: 'fitRows' // Anda bisa mencoba 'masonry' jika ingin tata letak yang lebih fleksibel
        });

        let portfolioFilters = document.querySelectorAll('.portfolio-filters li');

        portfolioFilters.forEach(function(el) {
            el.addEventListener('click', function() {
                // Hapus kelas 'filter-active' dari yang aktif sebelumnya
                document.querySelector('.portfolio-filters .filter-active').classList.remove('filter-active');
                // Tambahkan kelas 'filter-active' ke yang baru diklik
                this.classList.add('filter-active');

                // Atur filter Isotope
                portfolioIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });

                // Opsional: Scroll ke atas container setelah filter diubah (untuk UX yang lebih baik)
                // portfolioContainer.scrollIntoView({ behavior: 'smooth' });
            }, false);
        });
    }

    // --- Inisialisasi GLightbox untuk Image Pop-up ---
    const glightbox = GLightbox({
        selector: '.glightbox' // Memilih semua elemen dengan kelas 'glightbox'
    });

    // --- Optional: Inisialisasi AOS (Animate On Scroll) jika Anda menggunakannya ---
    // Pastikan Anda juga memiliki library AOS di-include di proyek Anda.
    AOS.init({
        duration: 800, // Durasi animasi dalam ms
        easing: 'ease-in-out', // Jenis easing
        once: true, // Animasi hanya berjalan sekali
        mirror: false // Tidak mengulang animasi saat scroll ke atas/bawah
    });
});
</script>