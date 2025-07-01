@extends('app') {{-- Sesuaikan dengan layout utama Anda --}}

@section('title', $project['title'] . ' - Detail Proyek') {{-- Judul halaman dinamis --}}

@section('content')
    <main id="main">
        <div class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Detail Proyek</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><a href="{{ route('project.index') }}">Proyek</a></li>
                        <li>Detail Proyek</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="project-details" class="project-details section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="project-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                @foreach ($project['images_gallery'] as $img)
                                    <div class="swiper-slide">
                                        <img src="{{ asset($img) }}" alt="{{ $project['title'] }}" class="img-fluid">
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="project-info">
                            <h3>Informasi Proyek</h3>
                            <ul>
                                <li><strong>Kategori</strong>: {{ $project['category'] }}</li>
                                <li><strong>Klien</strong>: {{ $project['client'] }}</li>
                                <li><strong>Tahun Proyek</strong>: {{ $project['year'] }}</li>
                                <li><strong>Anggaran</strong>: {{ $project['budget'] }}</li>
                                <li><strong>Lokasi</strong>: {{ $project['location'] }}</li>
                                {{-- Jika ada link proyek, uncomment ini:
                                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                                --}}
                            </ul>
                        </div>
                        <div class="project-description">
                            <h2>{{ $project['title'] }}</h2>
                            <p style="text-align:justify">
                                {{ $project['overview'] }}
                            </p>
                       
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        /* Breadcrumbs Style (pastikan konsisten dengan yang lain) */
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

        /* Project Details Specific Styles */
        .project-details {
            padding: 60px 0;
        }

        .project-details .project-details-slider {
            margin-bottom: 20px;
        }

        .project-details .project-details-slider img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .project-details .swiper-pagination {
            margin-top: 20px;
            position: relative;
        }

        .project-details .swiper-pagination .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background-color: #ccc;
            opacity: 0.7;
        }

        .project-details .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #018880; /* Warna aktif pagination */
            opacity: 1;
        }

        .project-details .project-info {
            padding: 25px;
            background-color: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .project-details .project-info h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #018880;
        }

        .project-details .project-info ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .project-details .project-info ul li {
            padding-bottom: 10px;
            font-size: 15px;
            color: #555;
            display: flex;
            align-items: center;
        }

        .project-details .project-info ul li strong {
            margin-right: 5px;
            min-width: 120px; /* Agar sejajar */
            color: #333;
        }

        .project-details .project-description h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .project-details .project-description p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .project-details .main-features h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #018880;
        }

        .project-details .main-features ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .project-details .main-features ul li {
            padding-bottom: 8px;
            color: #555;
            display: flex;
            align-items: center;
        }

        .project-details .main-features ul li i {
            color: #018880; /* Ikon checklist */
            margin-right: 8px;
            font-size: 16px;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.project-details-slider', {
                speed: 400,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true
                }
            });
        });
    </script>
@endpush