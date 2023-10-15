@extends('layouts.back.main')

@section('content')
    <div class="card h-60">
        <div class="card-header">
            <h5 class="">Galeri</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.galeri.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Galeri</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Judul Galeri..." class="form-control" id="basic-default-name" name="judul"
                            required />
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
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi Singkat</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Deskripsi Singkat" class="form-control" id="basic-default-name" name="desc"
                            required />
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
                    <label for="formFile" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" accept="image/*" id="formFile" name="gambar" />
                    </div>
                </div>
                <div class="row justify-content-end py-4">
                    <div class="col-sm-4">
                        <a class="btn btn-secondary text-white" href="{{ route('admin.galeri') }}">back</a>
                        <button type="submit" class="btn btn-success">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection