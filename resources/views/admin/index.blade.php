@extends('admin.layout.app')

@section('content')
<header class="mb-3 d-flex justify-content-between align-items-center">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Dashboard</h3>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <!-- Kartu Statistik -->
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-primary me-3">
                                    <span class="avatar-content">
                                        <i class="bi bi-kanban-fill text-white fs-4"></i>
                                    </span>
                                </div>
                                <div>
                                    <h6 class="text-muted font-semibold">Total Project</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalProjects }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-success me-3">
                                    <span class="avatar-content">
                                        <i class="bi bi-people-fill text-white fs-4"></i>
                                    </span>
                                </div>
                                <div>
                                    <h6 class="text-muted font-semibold">Total Tim</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalTeams }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-warning me-3">
                                    <span class="avatar-content">
                                        <i class="bi bi-person-lines-fill text-white fs-4"></i>
                                    </span>
                                </div>
                                <div>
                                    <h6 class="text-muted font-semibold">Total User</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalUsers }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Kartu Statistik -->
            </div>

            <!-- Tombol Lihat Website di bawah statistik -->
            <div class="mt-4 text-center">
                <a href="{{ url('/') }}" target="_blank" class="btn btn-lg btn-success">
                    Lihat Website <i class="bi bi-globe me-1"></i> 
                </a>
            </div>

            <!-- Tambahan konten lain jika diperlukan -->
        </div>
    </section>
</div>
@endsection

{{-- Tambahkan gaya CSS kustom di sini --}}
<style>
    .avatar {
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .avatar-content {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    .avatar-content i {
        font-size: 1.5rem;
        color: #ffffff;
        line-height: 1;
    }

    .card-body.px-4.py-4-5 {
        padding: 1.25rem 1.5rem;
    }

    .text-muted.font-semibold {
        font-size: 0.9rem;
        margin-bottom: 0.2rem;
    }

    .font-extrabold.mb-0 {
        font-size: 1.5rem;
        font-weight: 800;
    }
</style>
