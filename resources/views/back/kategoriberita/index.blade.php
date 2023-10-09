@extends('layouts.back.main')

@section('content')
    @if (session('status-success'))
    <div class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 end-0 show" role="alert" aria-live="assertive"
        aria-atomic="true" data-delay="2000">
        <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">{{ session('status-success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">{{ session('statusSusccess') }}</div>
    </div>
    @endif
    <div class="card">
        <div class="card-header row">
            <h5 class="col-md-8">Kategori Berita</h5>
            <div class="col-md-4">
                <a href="{{ Route('admin.kategoriberita.create') }}" class="btn btn-primary float-end"><i class='menu-icon bx bxs-plus-square'></i>Tambah Kategori Berita</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th class="text-center">Jumlah Berita dengan Kategori ini</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($kategori as $item)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $loop->iteration }}</strong></td>
                        <td>{{ $item->nama }}</td>
                        <td class="text-center">{{ $jumlah[$item['id']] }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="bg-warning text-white text-center" colspan="4">Data Masih Kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection