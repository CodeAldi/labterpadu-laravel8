@extends('layouts.back.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Upload Dokumen</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.dokumen.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Dokumen</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Judul Dokumen..." class="form-control" id="basic-default-name"
                            name="judul" required />
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="form-text text-danger">{{ $error }}</div>
                        {{-- <div class="form-text text-danger">* nama kategori tidak boleh kosong atau sama dengan nama
                            kategori yang sudah ada</div> --}}
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="formFile" class="col-sm-2 col-form-label">Dokumen</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile" name="dokumen" />
                    </div>
                </div>
        </div>
        <div class="row justify-content-end py-4">
            <div class="col-sm-4">
                <a class="btn btn-secondary text-white" href="{{ route('admin.dokumen') }}">back</a>
                <button type="submit" class="btn btn-success">Publish</button>
            </div>
        </div>
        </form>
    </div>
    </div>
@endsection