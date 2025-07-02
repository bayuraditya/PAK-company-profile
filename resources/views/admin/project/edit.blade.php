@extends('admin.layout.app')

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Edit Project</h3>
</div>

<div class="page-content">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.project.update', $project) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Project</label>
                    <input type="text" name="name" class="form-control" required value="{{ old('name', $project->name) }}">
                    @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category', $project->category) }}">
                    @error('category')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="client" class="form-label">Client</label>
                    <input type="text" name="client" class="form-control" value="{{ old('client', $project->client) }}">
                    @error('client')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Tahun</label>
                    <input type="number" name="year" class="form-control" value="{{ old('year', $project->year) }}">
                    @error('year')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="budget" class="form-label">Anggaran</label>
                    <input type="text" name="budget" class="form-control" value="{{ old('budget', $project->budget) }}">
                    @error('budget')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Lokasi</label>
                    <input type="text" name="location" class="form-control" value="{{ old('location', $project->location) }}">
                    @error('location')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $project->description) }}</textarea>
                    @error('description')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Upload Foto Baru (boleh lebih dari satu)</label>
                    <input type="file" name="images[]" class="form-control" multiple accept="image/*">
                    @error('images')<div class="text-danger small">{{ $message }}</div>@enderror
                    @error('images.*')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Saat Ini</label>
                    <div class="row">
                        @forelse ($project->projectImages as $img)
                            <div class="col-md-3 mb-3 position-relative">
                                <img src="{{ asset($img->path) }}" class="img-fluid rounded mb-1" style="max-height: 150px;" alt="Foto">
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" name="delete_images[]" value="{{ $img->id }}" id="delete_{{ $img->id }}">
                                    <label class="form-check-label text-danger small" for="delete_{{ $img->id }}">
                                        Hapus Foto
                                    </label>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-muted">Belum ada foto.</div>
                        @endforelse
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i> Update
                </button>
                <a href="{{ route('admin.project.index') }}" class="btn btn-secondary ms-2">
                    <i class="bi bi-arrow-left me-1"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
