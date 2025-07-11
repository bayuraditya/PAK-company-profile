@extends('app')

@section('title', $project->name . ' - Detail Proyek')

@section('content')
<main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Proyek</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ route('project.index') }}">Proyek</a></li>
                    <li>{{ $project->name }}</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Project Detail -->
    <section id="project-details" class="project-details section">
        <div class="container">
            <div class="row gy-4">
                <!-- Gallery Slider -->
                <div class="col-lg-8">
                    <div class="project-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @forelse ($project->projectImages as $img)
                                <div class="swiper-slide">
                                    <img
                                        src="{{ asset($img->path) }}"
                                        alt="{{ $project->name }}"
                                        class="img-fluid"
                                        onerror="this.onerror=null;this.src='https://plus.unsplash.com/premium_photo-1681691912442-68c4179c530c?q=80&w=2071&auto=format&fit=crop';"
                                    />

                                </div>
                            @empty
                                <div class="swiper-slide">
                                    <img src="https://plus.unsplash.com/premium_photo-1681691912442-68c4179c530c?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="No Image" class="img-fluid">
                                </div>
                            @endforelse
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>

                <!-- Project Info -->
                <div class="col-lg-4">
                    <div class="project-info">
                        <h3>Informasi Proyek</h3>
                        <ul>
                            <li><strong>Kategori</strong>: {{ $project->category }}</li>
                            <li><strong>Klien</strong>: {{ $project->client ?? '-' }}</li>
                            <li><strong>Tahun Proyek</strong>: {{ $project->year ?? '-' }}</li>
                            <li><strong>Anggaran</strong>: {{ $project->budget ?? '-' }}</li>
                            <li><strong>Lokasi</strong>: {{ $project->location ?? '-' }}</li>
                        </ul>
                    </div>
                    <div class="project-description">
                        <h2>{{ $project->name }}</h2>
                        <p style="text-align:justify">
                            {{ $project->description }}
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
    .breadcrumbs {
        padding: 15px 0;
        background-color: #f8f9fa;
        margin-top: 80px;
        color: #333;
    }

    .breadcrumbs h2 {
        font-size: 24px;
        font-weight: 600;
        margin: 0;
    }

    .breadcrumbs ol {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        padding: 0;
        font-size: 14px;
        margin: 0;
    }

    .breadcrumbs ol li + li {
        padding-left: 10px;
    }

    .breadcrumbs ol li + li::before {
        padding-right: 10px;
        color: #666;
        content: "/";
    }

    .breadcrumbs ol li a {
        color: #018880;
        text-decoration: none;
        transition: 0.3s;
    }

    .breadcrumbs ol li a:hover {
        text-decoration: underline;
    }

    .project-details {
        padding: 60px 0;
    }

    .project-details .project-details-slider {
        position: relative;
        margin-bottom: 20px;
    }

    .project-details .project-details-slider img {
    width: 100%;
    max-height: 500px; /* batas tinggi maksimum */
    object-fit: cover; /* agar gambar proporsional */
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }


    .swiper-button-prev,
    .swiper-button-next {
        color: #018880;
        top: 45%;
        width: 40px;
        height: 40px;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        color: #007060;
    }

    .swiper-pagination-bullet {
        background-color: #ccc;
        opacity: 0.7;
    }

    .swiper-pagination-bullet-active {
        background-color: #018880;
        opacity: 1;
    }

    .project-info {
        padding: 25px;
        background-color: #f8f9fa;
        border-radius: 8px;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .project-info h3 {
        font-size: 20px;
        font-weight: 700;
        color: #018880;
        margin-bottom: 15px;
    }

    .project-info ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .project-info ul li {
        padding-bottom: 10px;
        font-size: 15px;
        color: #555;
        display: flex;
        align-items: center;
    }

    .project-info ul li strong {
        margin-right: 5px;
        min-width: 120px;
        color: #333;
    }

    .project-description h2 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #333;
    }

    .project-description p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
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
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>
@endpush
