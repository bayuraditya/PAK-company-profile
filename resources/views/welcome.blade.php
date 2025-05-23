<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PT. Sukses Makmur</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: url('https://images.unsplash.com/photo-1581090700227-1e8eaf6d29a4?auto=format&fit=crop&w=1400&q=80') no-repeat center center;
      background-size: cover;
      color: white;
      padding: 120px 0;
      text-align: center;
    }
    .section-title {
      margin-top: 60px;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">PT. Sukses Makmur</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">Portofolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <div class="container">
      <h1>Solusi Konstruksi Andal & Inovatif</h1>
      <p>Profesional | Berkualitas | Tepat Waktu</p>
      <a href="#contact" class="btn btn-primary">Hubungi Kami</a>
    </div>
  </div>

  <!-- About -->
  <section id="about" class="container py-5">
    <h2 class="text-center section-title">Tentang Kami</h2>
    <p class="text-center">PT. Sukses Makmur adalah perusahaan jasa konstruksi dengan pengalaman lebih dari 10 tahun, mengedepankan kualitas, keamanan, dan kepuasan klien.</p>
  </section>

  <!-- Services -->
  <section id="services" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center section-title">Layanan Kami</h2>
      <div class="row text-center">
        <div class="col-md-3">
          <h5>Konstruksi Gedung</h5>
          <p>Pembangunan perkantoran, rumah tinggal, dan gedung komersial.</p>
        </div>
        <div class="col-md-3">
          <h5>Infrastruktur</h5>
          <p>Pembangunan jalan, jembatan, dan saluran drainase.</p>
        </div>
        <div class="col-md-3">
          <h5>Renovasi</h5>
          <p>Peremajaan dan perbaikan bangunan sesuai kebutuhan.</p>
        </div>
        <div class="col-md-3">
          <h5>Manajemen Proyek</h5>
          <p>Perencanaan, pengawasan, hingga penyelesaian proyek.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section id="portfolio" class="container py-5">
    <h2 class="text-center section-title">Portofolio</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <img src="https://source.unsplash.com/800x600/?building" class="img-fluid rounded" alt="Proyek A">
        <p class="mt-2">Gedung Dinas XYZ - 2023</p>
      </div>
      <div class="col-md-4 mb-4">
        <img src="https://source.unsplash.com/800x600/?construction" class="img-fluid rounded" alt="Proyek B">
        <p class="mt-2">Renovasi Kantor ABC - 2022</p>
      </div>
      <div class="col-md-4 mb-4">
        <img src="https://source.unsplash.com/800x600/?road" class="img-fluid rounded" alt="Proyek C">
        <p class="mt-2">Pembangunan Jalan Raya - 2021</p>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center section-title">Kontak Kami</h2>
      <div class="row">
        <div class="col-md-6">
          <p><strong>Alamat:</strong> Jl. Pembangunan No.123, Jakarta</p>
          <p><strong>Telepon:</strong> (021) 555-1234</p>
          <p><strong>Email:</strong> info@suksesmakmur.co.id</p>
        </div>
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Nama Anda">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email Anda">
            </div>
            <div class="mb-3">
              <textarea class="form-control" rows="4" placeholder="Pesan Anda"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; {{ date('Y') }} PT. Sukses Makmur. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
