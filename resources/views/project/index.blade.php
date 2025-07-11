@extends('app') {{-- Sesuaikan dengan layout utama Anda --}}

@section('title', 'Semua Proyek Kami')

@section('content')
    <main id="main" class="">
        <div class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Semua Proyek</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>Semua Proyek</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="all-projects" class="all-projects section">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Seluruh Karya Kami</h2><br><br>
                    <p>Jelajahi portofolio lengkap proyek-proyek konstruksi kami dari berbagai skala dan tipe</p>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @forelse ($allProjects as $project)
                    <div class="col">
                        <div class="project-item">
                            <div class="project-img-container">
                                <img
                                    src="{{ asset(optional($project->projectImages->first())->path ?? '') }}"
                                    class="img-fluid"
                                    alt="{{ $project['name'] }}"
                                    onerror="this.onerror=null; this.src='https://plus.unsplash.com/premium_photo-1681691912442-68c4179c530c?q=80&w=2071&auto=format&fit=crop';"
                                />

                                <div class="project-overlay">
                                    {{-- Anda bisa arahkan ke halaman detail proyek tunggal jika ada --}}
                                    <a href="project/{{$project['slug']}}" title="Lihat Detail Proyek" class="details-link-overlay">
                                        <i class="bi bi-link-45deg"></i> Lihat Detail
                                    </a>
                                </div>
                            </div>
                            <div class="project-info">
                                <h4>{{ $project['name'] }}</h4>
                                <p class="project-category">{{ $project['category'] }}</p>
                                <p>{{ $project['description'] }}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p class="text-center">Belum ada proyek yang tersedia.</p>
                    </div>
                    @endforelse
                   

                </div>
            </div>

        </section>
        </main>
        
@endsection

@push('styles')

    {{-- Anda mungkin perlu menambahkan kembali style untuk project-item di sini, atau pastikan sudah terload dari global CSS --}}
    <style>
        /* Mengulang atau memastikan gaya untuk kartu proyek dari halaman utama */
        .all-projects .project-item {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .all-projects .project-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .all-projects .project-img-container {
            position: relative;
            overflow: hidden;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .all-projects .project-img-container img {
            width: 100%;
            height: 250px; /* Atur tinggi gambar sesuai kebutuhan */
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .all-projects .project-item:hover .project-img-container img {
            transform: scale(1.1);
        }

        .all-projects .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .all-projects .project-item:hover .project-overlay {
            opacity: 1;
        }

        .all-projects .details-link-overlay {
            color: #fff;
            font-size: 1.1rem;
            padding: 10px 20px;
            border: 2px solid #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 0.6s forwards;
            animation-delay: 0.2s;
        }

        .all-projects .project-item:hover .details-link-overlay {
            opacity: 1;
            transform: translateY(0);
        }

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

        .all-projects .details-link-overlay:hover {
            background-color: #fff;
            color: #018880; /* Warna aksen Anda */
        }

        .all-projects .details-link-overlay i {
            margin-right: 8px;
        }

        .all-projects .project-info {
            padding: 20px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .all-projects .project-info h4 {
            font-size: 1.5rem;
            color: var(--heading-color, #333);
            margin-bottom: 8px;
            font-weight: 600;
        }

        .all-projects .project-info .project-category {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 15px;
            display: block;
            font-style: italic;
        }

        .all-projects .project-info p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* --- Breadcrumbs Style --- */
        .breadcrumbs {
            padding: 15px 0;
            background-color: #f8f9fa;
            min-height: 40px;
            display: flex;
            align-items: center;
            margin-top: 80px; /* Sesuaikan dengan tinggi header Anda */
            color: #333;
        }

        .breadcrumbs h2 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .breadcrumbs ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 14px;
        }

        .breadcrumbs ol li + li {
            padding-left: 10px;
        }

        .breadcrumbs ol li + li::before {
            display: inline-block;
            padding-right: 10px;
            color: #666;
            content: "/";
        }

        .breadcrumbs ol li a {
            color: #018880; /* Warna link breadcrumbs */
            text-decoration: none;
            transition: 0.3s;
        }

        .breadcrumbs ol li a:hover {
            text-decoration: underline;
        }
    </style>
@endpush