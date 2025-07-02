@extends('admin.layout.app')

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Informasi Kontak Perusahaan</h3>
</div>

<div class="page-content">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">Data Kontak Perusahaan</h4>
            @if ($contact)
                <a href="{{ route('admin.contact.edit') }}" class="btn btn-warning">
                    <i class="bi bi-pencil-square"></i> Edit
                </a>
            @else
                <form action="{{ route('admin.contact.store') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Kontak</button>
                </form>
            @endif
        </div>

        <div class="card-body">
            @if (session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
            @if (session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif

            @if ($contact)
            <table class="table table-bordered">
                <tr><th>Email</th><td>{{ $contact->email ?? 'N/A'}}</td></tr>
                <tr><th>WhatsApp</th><td>{{ $contact->whatsapp ?? 'N/A' }}</td></tr>
                <tr><th>Alamat</th><td>{{ $contact->address ?? 'N/A' }}</td></tr>
                <tr>
                    <th>Instagram</th>
                    <td>
                            <a href="https://instagram.com/{{ $contact->instagram ?? 'N/A' }}" target="_blank">@ {{ $contact->instagram ?? 'N/A' }}</a>
                    </td>
                </tr>
                <tr>
                    <th>LinkedIn</th>
                    <td>
                            <a href="{{ $contact->linkedin ?? 'N/A' }}" target="_blank">{{ $contact->linkedin ?? 'N/A' }}</a>
                    </td>
                </tr>
            </table>
            @else
                <p class="text-muted">Belum ada data kontak yang disimpan.</p>
            @endif
        </div>
    </div>
</div>
@endsection
