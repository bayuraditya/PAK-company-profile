<section id="project" class="project section" data-aos="fade-up">
    <div class="container section-title">
        <h2>Project</h2>
        <div>
            <span>Our</span>
            <span class="description-title">Project</span>
        </div>
    </div>
    <div class="container">
        <div class="row gy-4">
          

            @foreach ($projects as $project)
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $project['aos_delay'] }}">
                <div class="project-item">
                    <div class="project-img-container">
                        <img src="{{ $project->projectImages->isNotEmpty() 
                            ? asset($project->projectImages->first()->path) 
                            : 'https://plus.unsplash.com/premium_photo-1681691912442-68c4179c530c?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                            alt="{{ $project->name }}">

                        <div class="project-overlay">
                            <a href="/project/{{$project['slug']}}" title="Lihat Detail Proyek" class="details-link-overlay">
                                <i class="bi bi-link-45deg"></i> Lihat Detail
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h5>{{ $project['name'] }}</h5>
                        <p class="project-category">{{ $project['category'] }}</p>
                        <p>{{ $project['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="700">
            <a href="/project" class="btn-get-started">Lihat Semua Proyek</a>
        </div>
    </div>
</section>

<style>
    /* --- Project Section Styles --- */
    .project-item {
        background-color: #fff;
        /* Rounded border */
        border-radius: 10px; /* Nilai radius bisa disesuaikan */
        overflow: hidden; /* Penting untuk radius dan efek gambar */
        /* Shadow */
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); /* Efek shadow default */
        /* Animasi saat hover */
        transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
        height: 100%; /* Memastikan tinggi kartu seragam */
        display: flex;
        flex-direction: column;
    }

    .project-item:hover {
        transform: translateY(-8px); /* Mengangkat kartu sedikit saat hover */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Shadow lebih menonjol saat hover */
    }

    .project-img-container {
        position: relative;
        overflow: hidden; /* Untuk efek zoom pada gambar */
        border-top-left-radius: 10px; /* Rounded top untuk gambar */
        border-top-right-radius: 10px;
    }

    .project-img-container img {
        width: 100%;
        height: 250px; /* Atur tinggi gambar sesuai kebutuhan Anda */
        object-fit: cover; /* Memastikan gambar menutupi area tanpa terdistorsi */
        display: block; /* Menghilangkan spasi ekstra di bawah gambar */
        transition: transform 0.5s ease; /* Animasi zoom pada gambar */
    }

    .project-item:hover .project-img-container img {
        transform: scale(1.1); /* Efek zoom in pada gambar saat hover */
    }

    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6); /* Overlay hitam transparan */
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.4s ease; /* Animasi fade in overlay */
    }

    .project-item:hover .project-overlay {
        opacity: 1; /* Overlay muncul saat hover */
    }

    .details-link-overlay {
        color: #fff;
        font-size: 1.1rem;
        padding: 10px 20px;
        border: 2px solid #fff;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
        opacity: 0; /* Awalnya tersembunyi */
        transform: translateY(20px); /* Posisikan di bawah */
        animation: fadeUp 0.6s forwards; /* Animasi muncul dari bawah */
        animation-delay: 0.2s; /* Sedikit delay setelah overlay muncul */
    }

    .project-item:hover .details-link-overlay {
        opacity: 1;
        transform: translateY(0);
    }


    /* Keyframes untuk animasi fade-up pada tombol */
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


    .details-link-overlay:hover {
        background-color: #fff;
        color: var(--accent-color, #007bff); /* Ganti dengan warna aksen Anda */
    }

    .details-link-overlay i {
        margin-right: 8px;
    }

    .project-info {
        padding: 20px;
        text-align: center;
        flex-grow: 1; /* Memastikan info mengisi sisa ruang */
        display: flex;
        flex-direction: column;
        justify-content: flex-start; /* Konten info dimulai dari atas */
    }

    .project-info h4 {
        font-size: 1.5rem;
        color: var(--heading-color, #333);
        margin-bottom: 8px; /* Sesuaikan jarak */
        font-weight: 600; /* Sedikit lebih tebal */
    }

    .project-info .project-category {
        font-size: 0.9rem;
        color: #777;
        margin-bottom: 15px;
        display: block;
        font-style: italic; /* Sedikit miring untuk kategori */
    }

    .project-info p {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 0; /* Hapus margin bawah jika tidak ada elemen lain setelahnya */
    }

    /* Penyesuaian untuk tombol "Lihat Semua Proyek" */
    .btn-get-started {
        display: inline-block;
        padding: 12px 30px;
        border-radius: 50px;
        color: #fff;
        background: var(--accent-color, #007bff);
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid var(--accent-color, #007bff);
        font-weight: 500;
    }

    .btn-get-started:hover {
        background: transparent;
        color: var(--accent-color, #007bff);
    }
</style>