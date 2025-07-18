@extends('admin.layout.app') @section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Manajemen Team</h3>
</div>

<div class="page-content">
    <div class="card">
        <div
            class="card-header d-flex justify-content-between align-items-center"
        >
            <h4 class="card-title">Data Team</h4>
            <a href="{{ route('admin.team.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Anggota
            </a>
        </div>
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>WhatsApp</th>
                            <th>Email</th>
                            <th>Instagram</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($teams->isNotEmpty()) @foreach ($teams as $index =>
                        $team)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <a
                                    href="#"
                                    data-bs-toggle="modal"
                                    data-bs-target="#imageModal{{ $team->id }}"
                                >
                                    <img
                                        src="{{ asset($team->image_path) }}"
                                        alt="{{ $team->name }}"
                                        width="60"
                                        height="60"
                                        class="rounded-circle"
                                        style="cursor: pointer"
                                    />
                                </a>

                                <!-- Modal Preview -->
                                <div
                                    class="modal fade"
                                    id="imageModal{{ $team->id }}"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                    <div
                                        class="modal-dialog modal-dialog-centered"
                                    >
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img
                                                    src="{{ asset($team->image_path) }}"
                                                    class="img-fluid rounded"
                                                    alt="Preview"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->position }}</td>
                            <td>{{ $team->whatsapp ?? '-' }}</td>
                            <td>{{ $team->email ?? '-' }}</td>
                            <td>@ {{ $team->instagram ?? '-' }}</td>
                            <td>
                                <a
                                    href="{{ route('admin.team.edit', $team->name) }}"
                                    class="btn btn-sm btn-warning"
                                >
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form
                                    action="{{ route('admin.team.destroy', $team->name) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus?')"
                                >
                                    @csrf @method('DELETE')
                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-danger"
                                    >
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach @else
                        <tr>
                            <td colspan="9" class="text-center">
                                Belum ada data tim.
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
