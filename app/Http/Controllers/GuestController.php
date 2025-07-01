<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Method untuk menampilkan daftar semua proyek
    public function project(){
        // Data dummy proyek, Anda bisa menggantinya dengan data dari database
        $allProjects = [
            [
                'id' => '1',
                'title' => 'VILLAS - Villa Wantilan Nusa Dua',
                'slug' => 'VILLAS-Villa-Wantilan-Nusa-Dua',
                'category' => 'Renovasi Villa & Landscape',
                'image' => 'images/projects/villa-nusa-dua (2).jpeg',
                'description' => 'Perombakan total Villa Wantilan Nusa Dua, meliputi 3 bangunan kamar tidur terpisah beserta penataan landscape sekitarnya. Proyek ini mencakup pekerjaan Sipil, Interior, dan MEP.',
            ],
            [
                'id' => '2',
                'title' => 'CLUB HOUSE - Golf Course Nusa Dua',
                'slug' => 'CLUB-HOUSE-Golf-Course-Nusa-Dua',
                'category' => 'Renovasi Fasilitas Rekreasi',
                'image' => 'images/projects/golf-course-nusa-dua-clubhouse.jpeg',
                'description' => 'Perombakan total Club House Golf Course di Nusa Dua untuk meningkatkan fasilitas dan estetika. Lingkup pekerjaan meliputi Sipil, Interior, dan MEP.',
            ],
            [
                'id' => '3',
                'title' => 'OFFICE - Back Office Golf Course',
                'slug' => 'OFFICE-Back-Office-Golf-Course',
                'category' => 'Renovasi Kantor & Komersial',
                'image' => 'images/projects/golf-course-nusa-dua-backoffice.jpeg',
                'description' => 'Perombakan total Back Office Golf Course di Nusa Dua, menciptakan ruang kerja yang lebih modern dan fungsional. Proyek ini mencakup aspek Sipil, Interior, dan MEP.',
            ],
            [
                'id' => '4',
                'title' => 'SUPER STORE & OFFICE - Sunset Road',
                'slug' => 'SUPER-STORE-&-OFFICE-Sunset-Road',
                'category' => 'Pembangunan Retail & Komersial',
                'image' => 'images/projects/superstore-sunset-road.jpeg',
                'description' => 'Pembangunan Superstore dan Kantor di kawasan strategis Sunset Road, dirancang untuk efisiensi operasional dan kenyamanan pengunjung. Meliputi pekerjaan Sipil, Interior, dan MEP.',
            ],
            [
                'id' => '5',
                'title' => 'RESIDENCE - Rumah Tinggal Modern',
                'slug' => 'RESIDENCE-Rumah-Tinggal-Modern',
                'category' => 'Pembangunan Rumah Hunian',
                'image' => 'images/projects/residence-modern.jpeg',
                'description' => 'Pembangunan unit rumah tinggal yang didesain secara modern dan fungsional, memenuhi kebutuhan hunian berkualitas tinggi. Proyek ini mencakup Sipil, Interior, dan MEP.',
            ],
            [
                'id' => '6',
                'title' => 'FACILITY MAINTENANCE - Proyek Berkelanjutan',
                'slug' => 'FACILITY-MAINTENANCE-Proyek-Berkelanjutan',
                'category' => 'Pemeliharaan Fasilitas',
                'image' => 'images/projects/facility-maintenance.jpeg',
                'description' => 'Layanan pemeliharaan fasilitas berkelanjutan untuk memastikan semua infrastruktur dan bangunan berfungsi optimal serta terjaga kualitasnya. Mencakup perawatan Sipil, Interior, dan MEP.',
            ],
            // Tambahkan lebih banyak proyek di sini
        ];

        return view('project.index', compact('allProjects'));
    }

    // Method untuk menampilkan detail proyek berdasarkan slug
    public function showProjectDetail($slug)
    {
        // Data dummy proyek (harus sama dengan yang di method 'project' dan di Blade)
        $allProjects = [
            [
                'id' => 1,
                'title' => 'VILLAS - Villa Wantilan Nusa Dua',
                'slug' => 'VILLAS-Villa-Wantilan-Nusa-Dua',
                'category' => 'Renovasi Villa & Landscape',
                'image' => 'images/projects/villa-nusa-dua (2).jpeg',
                'description' => 'Perombakan total Villa Wantilan Nusa Dua, meliputi 3 bangunan kamar tidur terpisah beserta penataan landscape sekitarnya. Proyek ini mencakup pekerjaan Sipil, Interior, dan MEP. Proyek ini dirancang untuk memaksimalkan pemandangan laut dan privasi penghuni, dengan sentuhan arsitektur modern Bali.',
                'images_gallery' => [ // Galeri gambar tambahan
                    'images/projects/villa-nusa-dua (2).jpeg', // Gambar utama
                    'images/projects/villa-nusa-dua-gallery-1.jpeg',
                    'images/projects/villa-nusa-dua-gallery-2.jpeg',
                    'images/projects/villa-nusa-dua-gallery-3.jpeg',
                ],
                'client' => 'Bapak Adi',
                'year' => '2023',
                'budget' => 'Rp. 8.500.000.000',
                'main_features' => ['3 Kamar Tidur Utama', 'Kolam Renang Infinity', 'Desain Landscape Tropis', 'Sistem Smart Home'],
                'location' => 'Nusa Dua, Bali',
                'overview' => 'Villa Wantilan adalah proyek renovasi ekstensif yang bertujuan mengubah properti lama menjadi hunian mewah modern. Fokus utamanya adalah integrasi desain interior dan eksterior yang mulus dengan lingkungan alam sekitar. Kami menghadapi tantangan dalam mempertahankan struktur asli sambil memperkenalkan elemen-elemen kontemporer yang relevan.'
            ],
            [
                'id' => 2,
                'title' => 'CLUB HOUSE - Golf Course Nusa Dua',
                'slug' => 'CLUB-HOUSE-Golf-Course-Nusa-Dua',
                'category' => 'Renovasi Fasilitas Rekreasi',
                'image' => 'images/projects/villa-nusa-dua (2).jpeg',
                'description' => 'Perombakan total Club House Golf Course di Nusa Dua untuk meningkatkan fasilitas dan estetika. Lingkup pekerjaan meliputi Sipil, Interior, dan MEP.',
                'images_gallery' => [
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',

                ],
                'client' => 'PT. Golf Indah',
                'year' => '2022',
                'budget' => 'Rp. 12.000.000.000',
                'main_features' => ['Restoran Mewah', 'Pro Shop Modern', 'Lounge Anggota', 'Area Parkir Luas'],
                'location' => 'Nusa Dua, Bali',
                'overview' => 'Proyek Club House ini adalah inisiatif untuk memodernisasi fasilitas golf yang sudah ada. Kami berfokus pada peningkatan pengalaman anggota dengan menambahkan area lounge baru, memperluas pro shop, dan memperbarui desain interior secara menyeluruh. Pengelolaan jadwal agar tidak mengganggu operasional golf menjadi tantangan utama.'
            ],
            [
                'id' => 3,
                'title' => 'OFFICE - Back Office Golf Course',
                'slug' => 'OFFICE-Back-Office-Golf-Course',
                'category' => 'Renovasi Kantor & Komersial',
                'image' => 'images/projects/villa-nusa-dua (2).jpeg',
                'description' => 'Perombakan total Back Office Golf Course di Nusa Dua, menciptakan ruang kerja yang lebih modern dan fungsional. Proyek ini mencakup aspek Sipil, Interior, dan MEP.',
                'images_gallery' => [
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',

                ],
                'client' => 'PT. Golf Indah',
                'year' => '2022',
                'budget' => 'Rp. 3.000.000.000',
                'main_features' => ['Ruang Kerja Terbuka', 'Ruang Rapat Kedap Suara', 'Sistem Pencahayaan Otomatis'],
                'location' => 'Nusa Dua, Bali',
                'overview' => 'Renovasi back office ini bertujuan untuk menciptakan lingkungan kerja yang lebih efisien dan nyaman bagi staf. Kami melakukan perbaikan struktural dan modernisasi interior untuk mendukung produktivitas. Fokus pada integrasi teknologi baru untuk manajemen fasilitas.'
            ],
            [
                'id' => 4,
                'title' => 'SUPER STORE & OFFICE - Sunset Road',
                'slug' => 'SUPER-STORE-&-OFFICE-Sunset-Road',
                'category' => 'Pembangunan Retail & Komersial',
                'image' => 'images/projects/villa-nusa-dua (2).jpeg',
                'description' => 'Pembangunan Superstore dan Kantor di kawasan strategis Sunset Road, dirancang untuk efisiensi operasional dan kenyamanan pengunjung. Meliputi pekerjaan Sipil, Interior, dan MEP.',
                'images_gallery' => [
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',

                ],
                'client' => 'PT. Retail Maju',
                'year' => '2024',
                'budget' => 'Rp. 25.000.000.000',
                'main_features' => ['Area Retail Luas', 'Kantor Modern', 'Fasilitas Gudang Otomatis', 'Parkir Basement'],
                'location' => 'Sunset Road, Bali',
                'overview' => 'Proyek ini adalah pembangunan fasilitas ritel dan kantor berskala besar. Kami berupaya menciptakan ruang yang menarik bagi pelanggan sambil menyediakan lingkungan kerja yang optimal. Tantangan utamanya adalah koordinasi logistik dan jadwal yang ketat.'
            ],
            [
                'id' => 5,
                'title' => 'RESIDENCE - Rumah Tinggal Modern',
                'slug' => 'RESIDENCE-Rumah-Tinggal-Modern',
                'category' => 'Pembangunan Rumah Hunian',
                'image' => 'images/projects/villa-nusa-dua (2).jpeg',
                'description' => 'Pembangunan unit rumah tinggal yang didesain secara modern dan fungsional, memenuhi kebutuhan hunian berkualitas tinggi. Proyek ini mencakup Sipil, Interior, dan MEP.',
                'images_gallery' => [
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',

                ],
                'client' => 'Keluarga Budi',
                'year' => '2023',
                'budget' => 'Rp. 6.000.000.000',
                'main_features' => ['4 Kamar Tidur', 'Dapur Terbuka', 'Taman Minimalis', 'Sistem Keamanan Terintegrasi'],
                'location' => 'Denpasar, Bali',
                'overview' => 'Pembangunan rumah tinggal ini difokuskan pada efisiensi ruang dan desain kontemporer. Kami menggunakan material berkualitas tinggi untuk memastikan daya tahan dan estetika. Penekanan pada pencahayaan alami dan ventilasi untuk kenyamanan penghuni.'
            ],
            [
                'id' => 6,
                'title' => 'FACILITY MAINTENANCE - Proyek Berkelanjutan',
                'slug' => 'FACILITY-MAINTENANCE-Proyek-Berkelanjutan',
                'category' => 'Pemeliharaan Fasilitas',
                'image' => 'images/projects/villa-nusa-dua (2).jpeg',
                'description' => 'Layanan pemeliharaan fasilitas berkelanjutan untuk memastikan semua infrastruktur dan bangunan berfungsi optimal serta terjaga kualitasnya. Mencakup perawatan Sipil, Interior, dan MEP.',
                'images_gallery' => [
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',
                    'images/projects/villa-nusa-dua (2).jpeg',

                ],
                'client' => 'Berbagai Klien Korporat',
                'year' => '2020-Sekarang',
                'budget' => 'Bervariasi per Kontrak',
                'main_features' => ['Pemeliharaan Preventif', 'Perbaikan Darurat', 'Audit Fasilitas', 'Manajemen Energi'],
                'location' => 'Bali & Sekitarnya',
                'overview' => 'Layanan pemeliharaan fasilitas kami adalah kontrak jangka panjang yang memastikan semua sistem berjalan lancar. Kami menyediakan respons cepat untuk perbaikan dan melakukan inspeksi rutin untuk mencegah masalah. Kualitas layanan dan kepuasan klien adalah prioritas utama.'
            ],
        ];

        // Cari proyek berdasarkan ID
        $project = collect($allProjects)->firstWhere('slug', $slug);

        if (!$project) {
            abort(404); // Tampilkan halaman 404 jika proyek tidak ditemukan
        }

        return view('project.detail', compact('project'));
    }

    // Method baru untuk menampilkan daftar semua portofolio
    public function portfolio(){
        // Data dummy portofolio. Sesuaikan dengan struktur data yang Anda butuhkan.
        $allPortfolios = [
            [
                'id' => '1',
                'title' => 'Desain Interior Kantor Startup',
                'slug' => 'desain-interior-kantor-startup',
                'category' => 'Desain Interior',
                'image' => 'images/portfolios/interior-startup-office.jpeg',
                'description' => 'Menciptakan ruang kerja modern dan inspiratif untuk startup teknologi, dengan fokus pada kolaborasi dan kenyamanan. Termasuk desain furnitur kustom dan pencahayaan cerdas.',
            ],
            [
                'id' => '2',
                'title' => 'Landscape Taman Residensial',
                'slug' => 'landscape-taman-residensial',
                'category' => 'Landscape Arsitektur',
                'image' => 'images/portfolios/residential-garden-landscape.jpeg',
                'description' => 'Perencanaan dan pembangunan taman belakang rumah dengan konsep tropis minimalis, dilengkapi fitur air dan area bersantai.',
            ],
            [
                'id' => '3',
                'title' => 'Renovasi Fasad Hotel Butik',
                'slug' => 'renovasi-fasad-hotel-butik',
                'category' => 'Renovasi Bangunan',
                'image' => 'images/portfolios/boutique-hotel-facade.jpeg',
                'description' => 'Pembaruan total fasad hotel butik untuk memberikan tampilan yang lebih modern dan menarik, dengan penggunaan material ramah lingkungan.',
            ],
            [
                'id' => '4',
                'title' => 'Pembangunan Cafe & Restoran Unik',
                'slug' => 'pembangunan-cafe-restoran-unik',
                'category' => 'Konstruksi Komersial',
                'image' => 'images/portfolios/unique-cafe-restaurant.jpeg',
                'description' => 'Konstruksi cafe dan restoran dengan desain industrial-vintage, memaksimalkan ruang terbuka dan sirkulasi udara alami.',
            ],
            [
                'id' => '5',
                'title' => 'Struktur Baja Gudang Logistik',
                'slug' => 'struktur-baja-gudang-logistik',
                'category' => 'Struktur Bangunan',
                'image' => 'images/portfolios/steel-warehouse-structure.jpeg',
                'description' => 'Perencanaan dan pemasangan struktur baja untuk gudang logistik skala besar, memastikan kekuatan dan efisiensi ruang.',
            ],
            [
                'id' => '6',
                'title' => 'Audit Energi Gedung Perkantoran',
                'slug' => 'audit-energi-gedung-perkantoran',
                'category' => 'Manajemen Energi',
                'image' => 'images/portfolios/office-building-energy-audit.jpeg',
                'description' => 'Analisis komprehensif konsumsi energi gedung perkantoran dan rekomendasi untuk peningkatan efisiensi energi.',
            ],
            // Tambahkan lebih banyak item portofolio di sini
        ];

        return view('portfolio.index', compact('allPortfolios'));
    }

    // Method baru untuk menampilkan detail portofolio berdasarkan slug
    public function showPortfolioDetail($slug)
    {
        // Data dummy portofolio (harus sama dengan yang di method 'portfolio')
        $allPortfolios = [
            [
                'id' => 1,
                'title' => 'Desain Interior Kantor Startup',
                'slug' => 'desain-interior-kantor-startup',
                'category' => 'Desain Interior',
                'image' => 'images/portfolios/interior-startup-office.jpeg',
                'description' => 'Menciptakan ruang kerja modern dan inspiratif untuk startup teknologi, dengan fokus pada kolaborasi dan kenyamanan. Termasuk desain furnitur kustom dan pencahayaan cerdas. Kami mengintegrasikan area lounge, ruang rapat fleksibel, dan area kerja terbuka yang mendukung kreativitas.',
                'images_gallery' => [ // Galeri gambar tambahan
                    'images/portfolios/interior-startup-office.jpeg',
                    'images/portfolios/interior-startup-office-gallery-1.jpeg',
                    'images/portfolios/interior-startup-office-gallery-2.jpeg',
                    'images/portfolios/interior-startup-office-gallery-3.jpeg',
                ],
                'client' => 'PT. Inovasi Digital',
                'year' => '2024',
                'location' => 'Jakarta, Indonesia',
                'services_provided' => ['Desain Interior', 'Pemilihan Material', 'Manajemen Proyek'],
                'challenges' => 'Menciptakan ruang multifungsi di area terbatas dengan anggaran yang efisien.',
                'solution' => 'Memanfaatkan furnitur modular, partisi kaca, dan warna cerah untuk menciptakan ilusi ruang yang lebih besar dan dinamis.'
            ],
            [
                'id' => 2,
                'title' => 'Landscape Taman Residensial',
                'slug' => 'landscape-taman-residensial',
                'category' => 'Landscape Arsitektur',
                'image' => 'images/portfolios/residential-garden-landscape.jpeg',
                'description' => 'Perencanaan dan pembangunan taman belakang rumah dengan konsep tropis minimalis, dilengkapi fitur air dan area bersantai. Desain ini bertujuan untuk menciptakan oasis pribadi yang menenangkan.',
                'images_gallery' => [
                    'images/portfolios/residential-garden-landscape.jpeg',
                    'images/portfolios/residential-garden-landscape-gallery-1.jpeg',
                    'images/portfolios/residential-garden-landscape-gallery-2.jpeg',
                ],
                'client' => 'Keluarga Santoso',
                'year' => '2023',
                'location' => 'Bandung, Indonesia',
                'services_provided' => ['Desain Landscape', 'Penanaman', 'Instalasi Fitur Air'],
                'challenges' => 'Integrasi sistem drainase yang efektif dan pemilihan tanaman yang tahan cuaca lokal.',
                'solution' => 'Penggunaan material lokal dan sistem irigasi otomatis untuk perawatan yang mudah.'
            ],
            [
                'id' => 3,
                'title' => 'Renovasi Fasad Hotel Butik',
                'slug' => 'renovasi-fasad-hotel-butik',
                'category' => 'Renovasi Bangunan',
                'image' => 'images/portfolios/boutique-hotel-facade.jpeg',
                'description' => 'Pembaruan total fasad hotel butik untuk memberikan tampilan yang lebih modern dan menarik, dengan penggunaan material ramah lingkungan. Termasuk perbaikan struktural minor dan pemasangan pencahayaan eksterior baru.',
                'images_gallery' => [
                    'images/portfolios/boutique-hotel-facade.jpeg',
                    'images/portfolios/boutique-hotel-facade-gallery-1.jpeg',
                    'images/portfolios/boutique-hotel-facade-gallery-2.jpeg',
                ],
                'client' => 'Hotel Mawar',
                'year' => '2022',
                'location' => 'Yogyakarta, Indonesia',
                'services_provided' => ['Desain Fasad', 'Pekerjaan Sipil', 'Pemasangan Material'],
                'challenges' => 'Memastikan renovasi tidak mengganggu operasional hotel dan keamanan tamu.',
                'solution' => 'Pengerjaan dilakukan secara bertahap dan di luar jam sibuk, dengan pengawasan ketat terhadap standar keselamatan.'
            ],
            [
                'id' => 4,
                'title' => 'Pembangunan Cafe & Restoran Unik',
                'slug' => 'pembangunan-cafe-restoran-unik',
                'category' => 'Konstruksi Komersial',
                'image' => 'images/portfolios/unique-cafe-restaurant.jpeg',
                'description' => 'Konstruksi cafe dan restoran dengan desain industrial-vintage, memaksimalkan ruang terbuka dan sirkulasi udara alami. Desain interior menciptakan suasana nyaman dan instagrammable.',
                'images_gallery' => [
                    'images/portfolios/unique-cafe-restaurant.jpeg',
                    'images/portfolios/unique-cafe-restaurant-gallery-1.jpeg',
                    'images/portfolios/unique-cafe-restaurant-gallery-2.jpeg',
                ],
                'client' => 'PT. Kuliner Kreatif',
                'year' => '2023',
                'location' => 'Surabaya, Indonesia',
                'services_provided' => ['Konstruksi Bangunan', 'Desain Interior & Eksterior', 'Pemasangan MEP'],
                'challenges' => 'Mengejar target waktu pembukaan dengan kualitas konstruksi yang tinggi.',
                'solution' => 'Manajemen proyek yang ketat dan koordinasi yang baik antar tim spesialis.'
            ],
            [
                'id' => 5,
                'title' => 'Struktur Baja Gudang Logistik',
                'slug' => 'struktur-baja-gudang-logistik',
                'category' => 'Struktur Bangunan',
                'image' => 'images/portfolios/steel-warehouse-structure.jpeg',
                'description' => 'Perencanaan dan pemasangan struktur baja untuk gudang logistik skala besar, memastikan kekuatan dan efisiensi ruang. Desain ini memungkinkan ekspansi di masa depan dan kapasitas penyimpanan yang optimal.',
                'images_gallery' => [
                    'images/portfolios/steel-warehouse-structure.jpeg',
                    'images/portfolios/steel-warehouse-structure-gallery-1.jpeg',
                    'images/portfolios/steel-warehouse-structure-gallery-2.jpeg',
                ],
                'client' => 'PT. Logistik Cepat',
                'year' => '2024',
                'location' => 'Karawang, Indonesia',
                'services_provided' => ['Perencanaan Struktur', 'Fabrikasi Baja', 'Ereksi Struktur'],
                'challenges' => 'Memastikan presisi dalam fabrikasi dan pemasangan struktur baja yang kompleks.',
                'solution' => 'Penggunaan teknologi BIM untuk desain akurat dan tim ereksi berpengalaman.'
            ],
            [
                'id' => 6,
                'title' => 'Audit Energi Gedung Perkantoran',
                'slug' => 'audit-energi-gedung-perkantoran',
                'category' => 'Manajemen Energi',
                'image' => 'images/portfolios/office-building-energy-audit.jpeg',
                'description' => 'Analisis komprehensif konsumsi energi gedung perkantoran dan rekomendasi untuk peningkatan efisiensi energi. Laporan mencakup analisis HVAC, pencahayaan, dan isolasi termal.',
                'images_gallery' => [
                    'images/portfolios/office-building-energy-audit.jpeg',
                    'images/portfolios/office-building-energy-audit-gallery-1.jpeg',
                    'images/portfolios/office-building-energy-audit-gallery-2.jpeg',
                ],
                'client' => 'PT. Gedung Hijau',
                'year' => '2023',
                'location' => 'Surabaya, Indonesia',
                'services_provided' => ['Audit Energi', 'Analisis Data', 'Rekomendasi Efisiensi'],
                'challenges' => 'Mengidentifikasi area dengan potensi penghematan energi terbesar tanpa mengorbankan kenyamanan penghuni.',
                'solution' => 'Pemasangan sensor pintar dan upgrade sistem pencahayaan ke LED, serta optimasi sistem HVAC.'
            ],
            // ... Tambahkan semua portofolio Anda di sini dengan ID yang unik ...
        ];

        // Cari portofolio berdasarkan slug
        $portfolio = collect($allPortfolios)->firstWhere('slug', $slug);

        if (!$portfolio) {
            abort(404); // Tampilkan halaman 404 jika portofolio tidak ditemukan
        }

        return view('portfolio.detail', compact('portfolio'));
    }
}