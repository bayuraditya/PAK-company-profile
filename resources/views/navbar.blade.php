        <header id="header" class="header d-flex align-items-center fixed-top">
            <div
                class="container position-relative d-flex align-items-center justify-content-between"
            >
                <a
                    href="/"
                    class="logo d-flex align-items-center me-auto me-xl-0"
                >
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{asset('images/logo pak putih tanpa teks.png')}}" alt="" />
                    <!-- <h4 class="sitename fw-bold">PT PENDI ABADI KARYA</h4> -->
                    <h4 class="sitename fw-bold">PT Pendi Abadi Karya</h4>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ url('/#hero') }}" class="active">Home</a></li>
                        <li><a href="{{ url('/#why-choose-us') }} ">About</a></li>
                        <li><a href="{{ url('/#services')}}">Services</a></li>
                        <li class="dropdown">
                          <a href="{{ url('/#project') }}"><span>Project</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                          <ul>
                            <li><a href="{{ url('/project') }}">Semua Project</a></li>
                          </ul>
                        </li> 
                        <!-- <li><a href="{{ url('/#portfolio') }}">Portfolio</a></li> -->
                        <li><a href="{{ url('/#galleries') }}">Galleries</a></li>
                        <!-- <li><a href="#pricing">Pricing</a></li> -->
                        <li><a href="{{ url('/#team') }}">Team</a></li>
                       
                        <li><a href="{{ url('/#contact') }}">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
              @guest
                  <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
              @endguest

              @auth
                  <a class="btn-getstarted" href="{{ route('admin.index') }}">Dashboard</a>
              @endauth
            </div>
        </header>