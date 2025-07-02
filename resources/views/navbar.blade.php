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
                        <li><a href="{{ url('/#project') }}">Project</a></li>
                        <!-- <li><a href="{{ url('/#portfolio') }}">Portfolio</a></li> -->
                        <li><a href="{{ url('/#galleries') }}">Galleries</a></li>
                        <!-- <li><a href="#pricing">Pricing</a></li> -->
                        <li><a href="{{ url('/#team') }}">Team</a></li>
                        <!-- <li class="dropdown">
              <a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown">
                  <a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> -->
                        <li><a href="{{ url('/#contact') }}">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="btn-getstarted" href="/login">Login</a>
            </div>
        </header>