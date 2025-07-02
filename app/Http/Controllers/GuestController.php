<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Team;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $projects = Project::with('projectImages')->take(8)->get();
        // dd($projects[0]->projectImages[0]->path);
        $galleries = ProjectImage::with('project')->take(10)->get();
        $teams = Team::get();
        $contact = Contact::firstOrFail();
        return view('welcome',compact('projects','galleries','teams','contact'));
    }
    // Method untuk menampilkan daftar semua proyek
    public function project(){
        $allProjects = Project::with('projectImages')->latest()->get();
        return view('project.index', compact('allProjects'));
    }

    // Method untuk menampilkan detail proyek berdasarkan slug
    public function showProjectDetail($slug)
    {
        // Ambil data project berdasarkan slug
        $project = Project::with('projectImages')->where('slug', $slug)->firstOrFail();

        // Kirim ke view detail
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