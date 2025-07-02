@extends('admin.layout.app')

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Edit Kontak Perusahaan</h3>
</div>

<div class="page-content">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Edit Kontak Perusahaan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contact.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" value="{{ old('email', $contact->email) }}" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="whatsapp">WhatsApp</label>
                    <input type="text" name="whatsapp" value="{{ old('whatsapp', $contact->whatsapp) }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="address">Alamat</label>
                    <textarea name="address" class="form-control">{{ old('address', $contact->address) }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="instagram">Instagram (tanpa @)</label>
                    <input type="text" name="instagram" value="{{ old('instagram', $contact->instagram) }}" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="linkedin">LinkedIn (URL)</label>
                    <input type="url" name="linkedin" value="{{ old('linkedin', $contact->linkedin) }}" class="form-control">
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.contact.index') }}" class="btn btn-secondary me-2">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
