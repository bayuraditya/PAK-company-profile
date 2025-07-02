<section id="galleries" class="galleries">
  <div class="container section-title" data-aos="fade-up">
    <h2>Galleries</h2>
    <div>
      <span>See Our</span>
      <span class="description-title">Work</span>
    </div>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gx-2 gy-2 portfolio-container"> {{-- gx dan gy dipersempit --}}
      {{-- Galeri Item --}}
      @foreach($galleries as $gallery)
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
          <img
            src="{{ asset($gallery->path ?? 'images/default-project.jpg') }}"
            class="img-fluid"
            alt="{{ $gallery->name ?? 'Project Image' }}"
          />
          <div class="portfolio-info">
            <div class="portfolio-links d-flex justify-content-center align-items-center h-100">
              <a
                href="{{ asset($gallery->path ?? 'images/default-project.jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox"
                title="{{ $gallery->project->name ?? 'Project Image' }}"
              ><i class="bi bi-plus"></i></a>
            </div>
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
    .galleries {
  padding: 60px 0;
}

.galleries .portfolio-item {
  padding: 0 5px; /* sempitkan padding antar kolom */
}

.galleries .row {
  /* margin-left: -5px; */
  /* margin-right: -5px; */
}

.galleries .portfolio-wrap {
  transition: all 0.3s ease-in-out;
  position: relative;
  overflow: hidden;
  /* border-radius: 8px; */
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.galleries .portfolio-wrap img {
  width: 100%;
  height: 250px !important;
  object-fit: cover;
  object-position: center;
  display: block;
  /* border-radius: 8px; */
  transition: all 0.3s ease-in-out;
}

.galleries .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  transition: all 0.3s ease-in-out;
  background-color: rgba(0, 0, 0, 0.7);
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  padding: 20px;
}

.galleries .portfolio-links a {
  color: #fff;
  font-size: 38px;
  display: inline-block;
  line-height: 0;
  transition: all 0.3s ease-in-out;
  text-decoration: none;
}

.galleries .portfolio-wrap:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 24px rgba(0, 0, 0, 0.15);
}

.galleries .portfolio-wrap:hover img {
  transform: scale(1.05);
}

.galleries .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

.galleries .portfolio-links a:hover {
  color: #007bff;
  transform: scale(1.2);
}

</style>
<!-- GLightbox CSS (opsional jika belum ada) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox',
    touchNavigation: true,
    loop: true,
    zoomable: true,
    width: '100%',
    height: 'auto'
  });
</script>
