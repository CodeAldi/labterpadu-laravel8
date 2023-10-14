@extends('layouts.back.main')

@section('content')
    <div class="card h-100">
        <div class="card-header row">
            <h5 class="col-md-8">List Dokumen</h5>
            <div class="col-md-4">
                <a href="{{ Route('admin.dokumen.create') }}" class="btn btn-primary float-end"><i
                        class='menu-icon bx bx-upload'></i>Upload Dokumen Baru</a>
            </div>
        </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Dokumen</th>
                            <th class="text-center">Dokumen</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dokumen as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->judul }}</td>
                                <td class="text-center">
                                    <form action="{{ route('admin.dokumen.show')}}" method="POST">
                                        @csrf
                                        <input type="text" name="id" value="{{ $item->id }}" hidden readonly>
                                        <button class="btn">Open</button>
                                    </form>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.dokumen.destroy',['id'=>$item->id]) }}"><i
                                                    class="bx bx-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="bg-warning text-white">Data Masih Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
    </div>
@endsection