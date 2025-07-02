@extends('admin.layout.app')

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Tambah Project</h3>
</div>

<div class="page-content">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Project</label>
                    <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                    @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category') }}">
                    @error('category')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="client" class="form-label">Client</label>
                    <input type="text" name="client" class="form-control" value="{{ old('client') }}">
                    @error('client')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Tahun</label>
                    <input type="number" name="year" class="form-control" value="{{ old('year') }}">
                    @error('year')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="budget" class="form-label">Anggaran</label>
                    <input type="text" name="budget" class="form-control" value="{{ old('budget') }}">
                    @error('budget')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Lokasi</label>
                    <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                    @error('location')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                    @error('description')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Foto Project (boleh lebih dari satu)</label>
                    <input type="file" name="images[]" class="form-control" multiple accept="image/*">
                    @error('images')<div class="text-danger small">{{ $message }}</div>@enderror
                    @error('images.*')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i> Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
