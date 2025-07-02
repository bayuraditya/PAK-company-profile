@extends('admin.layout.app')

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Ubah Password</h3>
</div>

<div class="page-content">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Ubah Password</h4>
        </div>
        <div class="card-body">
            {{-- Success Message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Error Message --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.profile.password.update') }}" method="POST">
                @csrf

                {{-- Current Password --}}
                <div class="form-group mb-3">
                    <label for="current_password">Password Lama</label>
                    <input type="password" name="current_password"
                           class="form-control @error('current_password') is-invalid @enderror"
                           required>
                    @error('current_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- New Password --}}
                <div class="form-group mb-3">
                    <label for="new_password">Password Baru</label>
                    <input type="password" name="new_password"
                           class="form-control @error('new_password') is-invalid @enderror"
                           required>
                    @error('new_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="form-group mb-4">
                    <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                    <input type="password" name="new_password_confirmation"
                           class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Password Baru
                </button>
                <a href="{{ route('admin.profile.edit') }}" class="btn btn-secondary ms-2">
                    Batal
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
