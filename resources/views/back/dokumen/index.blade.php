@extends('layouts.back.main')

@section('content')
    <div class="card">
        <div class="card-header row">
            <h5 class="col-md-8">List Dokumen</h5>
            <div class="col-md-4">
                <a href="{{ '#' }}" class="btn btn-primary float-end"><i
                        class='menu-icon bx bx-upload'></i>Upload Dokumen Baru</a>
            </div>
        </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th class="text-center">status</th>
                            <th class="text-center">pinned</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="bg-warning text-white">Data Masih Kosong</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
@endsection