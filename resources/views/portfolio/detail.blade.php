@extends('app') {{-- Asumsi Anda memiliki layout utama bernama 'app.blade.php' --}}

@section('title', $portfolio['title']) {{-- Mengatur judul halaman sesuai judul portofolio --}}

@section('content')

  <main id="main">

    <div class="breadcrumbs">
      <div class="container d-flex flex-column align-items-center justify-content-center">
        <h2>Portfolio Details</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
          <li>{{ $portfolio['title'] }}</li>
        </ol>
      </div>
    </div><section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                @foreach ($portfolio['images_gallery'] as $image)
                  <div class="swiper-slide">
                    <img src="{{ asset($image) }}" alt="{{ $portfolio['title'] }}" class="img-fluid">
                  </div>
                @endforeach

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project Information</h3>
              <ul>
                <li><strong>Category</strong>: {{ $portfolio['category'] }}</li>
                <li><strong>Client</strong>: {{ $portfolio['client'] ?? 'N/A' }}</li>
                <li><strong>Project year</strong>: {{ $portfolio['year'] ?? 'N/A' }}</li>
                <li><strong>Location</strong>: {{ $portfolio['location'] ?? 'N/A' }}</li>
                {{-- Tambahkan fitur utama jika ada --}}
                @if (!empty($portfolio['main_features']))
                    <li><strong>Main Features</strong>:
                        <ul>
                            @foreach ($portfolio['main_features'] as $feature)
                                <li>- {{ $feature }}</li>
                            @endforeach
                        </ul>
                    </li>
                @endif
                @if (!empty($portfolio['services_provided']))
                    <li><strong>Services Provided</strong>:
                        <ul>
                            @foreach ($portfolio['services_provided'] as $service)
                                <li>- {{ $service }}</li>
                            @endforeach
                        </ul>
                    </li>
                @endif
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{ $portfolio['title'] }}</h2>
              <p>
                {{ $portfolio['description'] }}
              </p>
              @if (!empty($portfolio['overview']))
                <h4>Overview</h4>
                <p>
                  {{ $portfolio['overview'] }}
                </p>
              @endif
              @if (!empty($portfolio['challenges']))
                <h4>Challenges</h4>
                <p>
                  {{ $portfolio['challenges'] }}
                </p>
              @endif
              @if (!empty($portfolio['solution']))
                <h4>Solution</h4>
                <p>
                  {{ $portfolio['solution'] }}
                </p>
              @endif
            </div>
          </div>

        </div>

      </div>
    </section></main>@endsection

@push('scripts')
  {{-- Swiper JS for the image gallery --}}
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      new Swiper('.portfolio-details-slider', {
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