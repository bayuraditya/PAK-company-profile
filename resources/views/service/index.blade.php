@extends('app') {{-- Asumsi Anda memiliki layout utama bernama 'app.blade.php' --}}

@section('title', 'Our Services - [Nama Perusahaan Anda]') {{-- Sesuaikan nama perusahaan --}}

@section('content')

  <main id="main">
<br>

<br>
<br>
<br>
<div class="breadcrumbs">
        <br>
      <div class="container d-flex flex-column align-items-center justify-content-center">
        <h2>Our Services</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Services</li>
        </ol>
      </div>
    </div><section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Expertise in Construction</h2>
          <p>We provide comprehensive construction services, from initial planning to final execution and meticulous supervision, ensuring high-quality results for every project.</p>
        </div>

        <div class="row">
          {{-- Kategori: Perencanaan Proyek --}}
          <div class="col-lg-6 mb-4">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div> {{-- Icon bisa disesuaikan --}}
              <h4 class="title"><a href="#">Project Planning</a></h4>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> **Desain**: Pembuatan rencana teknis bangunan, termasuk arsitektur dan struktur.</li>
                <li><i class="bi bi-check-circle-fill"></i> **Budgeting**: Penentuan anggaran proyek yang detail dan realistis.</li>
              </ul>
            </div>
          </div>

          {{-- Kategori: Pelaksanaan Proyek --}}
          <div class="col-lg-6 mb-4">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-building"></i></div> {{-- Icon bisa disesuaikan --}}
              <h4 class="title"><a href="#">Project Execution</a></h4>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> **Persiapan Pekerjaan**: Pemasangan pagar proyek, pengadaan alat berat, dan persiapan lokasi yang efisien.</li>
                <li><i class="bi bi-check-circle-fill"></i> **Pondasi**: Pembuatan pondasi yang kuat dan sesuai dengan desain teknis.</li>
                <li><i class="bi bi-check-circle-fill"></i> **Struktur**: Pembangunan rangka bangunan utama (kolom, balok, dll.) dengan presisi tinggi.</li>
                <li><i class="bi bi-check-circle-fill"></i> **Finishing**: Pengerjaan interior dan eksterior bangunan, seperti pengecatan, pemasangan keramik, dan instalasi listrik, untuk hasil akhir yang sempurna.</li>
              </ul>
            </div>
          </div>

          {{-- Kategori: Pengawasan Proyek --}}
          <div class="col-lg-6 mb-4">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-check-shield"></i></div> {{-- Icon bisa disesuaikan --}}
              <h4 class="title"><a href="#">Project Supervision</a></h4>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> **Pengawasan Teknis**: Memastikan kualitas pekerjaan sesuai dengan spesifikasi dan standar teknis yang berlaku.</li>
                <li><i class="bi bi-check-circle-fill"></i> **Pengawasan Kualitas**: Memastikan mutu bahan dan hasil pekerjaan memenuhi standar kualitas tertinggi.</li>
                <li><i class="bi bi-check-circle-fill"></i> **Pengawasan Keuangan**: Memantau penggunaan anggaran secara ketat dan memastikan tidak terjadi penyimpangan.</li>
              </ul>
            </div>
          </div>

          {{-- Kategori: Jenis Proyek Konstruksi --}}
          <div class="col-lg-6 mb-4">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-home-alt"></i></div> {{-- Icon bisa disesuaikan --}}
              <h4 class="title"><a href="#">Types of Construction Projects</a></h4>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> **Konstruksi Perumahan**: Pembangunan rumah tinggal, apartemen, atau kompleks perumahan yang nyaman dan modern.</li>
                <li><i class="bi bi-check-circle-fill"></i> **Konstruksi Gedung**: Pembangunan gedung perkantoran, pusat perbelanjaan, hotel, atau fasilitas umum lainnya dengan desain inovatif dan fungsional.</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section></main>@endsection

@push('styles')
  {{-- Tambahkan CSS kustom jika diperlukan untuk '.service-list' atau '.icon-box' --}}
  <style>
    .service-list {
      list-style: none; /* Menghilangkan bullet default */
      padding-left: 0;
      margin-top: 15px;
    }
    .service-list li {
      margin-bottom: 10px;
      display: flex;
      align-items: flex-start; /* Untuk keselarasan icon dengan teks */
      font-size: 15px;
      color: #444;
    }
    .service-list li i {
      font-size: 18px;
      color: #007bff; /* Warna icon centang */
      margin-right: 8px;
      margin-top: 2px; /* Penyesuaian vertikal */
    }
    .icon-box {
      padding: 30px;
      box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.08);
      border-radius: 8px;
      height: 100%; /* Memastikan tinggi box konsisten jika di row */
    }
    .icon-box .icon {
      float: left;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 70px;
      height: 70px;
      background: #e7f5ff;
      border-radius: 50%;
      transition: 0.5s;
      margin-right: 20px;
      color: #007bff;
      font-size: 30px;
    }
    .icon-box .title {
      margin-left: 90px;
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 20px;
    }
    .icon-box .title a {
      color: #343a40;
      transition: 0.3s;
    }
    .icon-box:hover .icon {
      background: #007bff;
      color: #fff;
    }
    .icon-box:hover .title a {
      color: #007bff;
    }
  </style>
@endpush