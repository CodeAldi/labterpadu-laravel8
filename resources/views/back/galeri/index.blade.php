@extends('layouts.back.main')

@section('content')
@if (session('status-success'))
<div class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 end-0 show" role="alert" aria-live="assertive"
    aria-atomic="true" data-delay="2000">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Upload Success</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">{{ session('status-success') }}</div>
</div>
@elseif(session('status-delete-success'))
<div class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 end-0 show" role="alert" aria-live="assertive"
    aria-atomic="true" data-delay="2000">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Delete Success</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">{{ session('status-delete-success') }}</div>
</div>
@endif
<div class="card h-15">
    <div class="card-body row">
        <h5 class="col-8 align-middle">List Gambar Di Galeri</h5>
        <div class="col-4">
            <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary float-end"><i 
                class='menu-icon bx bx-upload'></i>Upload Gambar</a>
        </div>
    </div>
</div>

<hr class="my-5" />

<div class="card h-100">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($galeri as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>
                        <img src="{{ asset('storage/'.$item->path) }}" alt="" width="75%">
                    </td>
                    <td>
                        <a class="text-black" href="{{ route('admin.galeri.destroy',['id'=>$item->id]) }}"><i class="bx bx-trash me-2"></i>
                            Delete</a>
                    </td>
                </tr>
                    
                @empty
                <tr>
                    <td colspan="5" class="bg-warning text-white">Data Masih Kosong</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection