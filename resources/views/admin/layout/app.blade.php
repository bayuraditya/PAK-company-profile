<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="shortcut icon" href="{{asset('images/logo pak hitam no bg.png')}}" type="image/x-icon" />
    <link
      rel="shortcut icon"
      href="{{asset('images/logo pak hitam no bg.png')}}"
      type="image/png"
    />

    <link rel="stylesheet" href="{{asset('admin-assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/compiled/css/table-datatable-jquery.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/compiled/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('admin-assets/compiled/css/app-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('admin-assets/compiled/css/iconly.css')}}" />
  </head>

  <body>
    <script src="{{asset('admin-assets/static/js/initTheme.js')}}"></script>
    <div id="app">
      @include('admin.layout.sidebar')
      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-content">
          @yield('content')
        </div>

        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2025 &copy; Pt. Pendi Abadi Karya</p>
            </div>
            <div class="float-end">
              
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="{{asset('admin-assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('admin-assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <script src="{{asset('admin-assets/compiled/js/app.js')}}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{asset('admin-assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin-assets/static/js/pages/dashboard.js')}}"></script>

    <script src=" {{asset('admin-assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}} "></script>
    
    
    <script src="{{asset('admin-assets/compiled/js/app.js')}}"></script>
    
<script src="{{asset('admin-assets/extensions/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('admin-assets/extensions/datatables.net/js/jquery.dataTables.min.js') }}"></script>

<script src="{{asset('admin-assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin-assets/static/js/pages/datatables.js')}}"></script>

  </body>
</html>
