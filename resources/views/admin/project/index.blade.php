@extends('admin.layout.app') 
@section('content')
 <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Manajemen Project</h3>
</div>
<div class="page-content">
    <div class="card">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center pt-4 pb-2">
                <h4 class="card-title">Daftar Project</h4>
                <a href="{{ route('admin.project.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Project
                </a>
            </div>

            {{-- Notifikasi sukses --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive mt-3">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Client</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Anggaran</th>
                            <th>Lokasi</th>
                            <th>Lihat Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->client ?? '-' }}</td>
                                <td>{{ $project->category ?? '-' }}</td>
                                <td>{{ $project->year ?? '-' }}</td>
                                <td>{{ $project->budget ?? '-' }}</td>
                                <td>{{ $project->location ?? '-' }}</td>
                                <td>
                                    <button class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#fotoModal{{ $project->id }}">
                                        <i class="bi bi-images"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="fotoModal{{ $project->id }}" tabindex="-1" aria-labelledby="fotoModalLabel{{ $project->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="fotoModalLabel{{ $project->id }}">Foto Project: {{ $project->name }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        @forelse($project->projectImages as $image)
                                                            <div class="col-md-4 mb-3">
                                                                <a href="{{ asset($image->path) }}" target="_blank">
                                                                    <img src="{{ asset($image->path) }}" class="img-fluid rounded" alt="Foto Project">
                                                                </a>
                                                            </div>
                                                        @empty
                                                            <div class="col-12 text-center">Tidak ada foto.</div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('admin.project.edit', $project) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.project.destroy', $project) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">Tidak ada project ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
