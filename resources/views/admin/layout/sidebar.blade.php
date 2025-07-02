<div id="sidebar">
  <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
      <div class="d-flex justify-content-between align-items-center">
        <div class="logo d-flex justify-content-center">
          <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo pak hitam no bg.png') }}" alt="Logo" style="height:77px;" />
          </a>
        </div>

        <div class="sidebar-toggler x">
          <a href="#" class="sidebar-hide d-xl-none d-block">
            <i class="bi bi-x bi-middle"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="sidebar-menu">
      <ul class="menu">
        <li class="sidebar-title">Menu Utama</li>

        <li class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
          <a href="{{ route('admin.index') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="sidebar-title">Manajemen Konten</li>

        <li class="sidebar-item {{ request()->routeIs('admin.project.*') ? 'active' : '' }}">
          <a href="{{ route('admin.project.index') }}" class="sidebar-link">
            <i class="bi bi-kanban-fill"></i>
            <span>Project</span>
          </a>
        </li>

        <li class="sidebar-item {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
          <a href="{{ route('admin.team.index') }}" class="sidebar-link">
            <i class="bi bi-people-fill"></i>
            <span>Team</span>
          </a>
        </li>

        <li class="sidebar-item {{ request()->routeIs('admin.contact.*') ? 'active' : '' }}">
          <a href="{{ route('admin.contact.index') }}" class="sidebar-link">
            <i class="bi bi-telephone-fill"></i>
            <span>Contact</span>
          </a>
        </li>

        <li class="sidebar-title">Pengaturan</li>

        <li class="sidebar-item {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
          <a href="{{ route('admin.profile.edit') }}" class="sidebar-link">
            <i class="bi bi-person-fill"></i>
            <span>Profile</span>
          </a>
        </li>

        <li class="sidebar-item {{ request()->routeIs('admin.user.*') ? 'active' : '' }}">
          <a href="{{ route('admin.user.index') }}" class="sidebar-link">
            <i class="bi bi-person-lines-fill"></i>
            <span>User</span>
          </a>
        </li>

        <li class="sidebar-item">
          <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger w-100 mt-3">
              <i class="bi bi-box-arrow-right me-2"></i> Logout
            </button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>
