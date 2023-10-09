@extends('layouts.back.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Create New News</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.berita.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Berita</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Judul Berita..." class="form-control" id="basic-default-name" name="judul" required />
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
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori Berita</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="kategori">
                            <option selected>Open this select menu</option>
                            @forelse ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @empty
                            <option value="#" class="bg-warning text-white">Kategori Berita Masih Kosong</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="formFile" class="col-sm-2 col-form-label">Thumbnail Berita</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile" name="thumbnail" />
                    </div>
                </div>
                
                <div class="row-mb-3">
                    <label for="x" class="col-sm-2 col-form-label">Isi Berita</label>
                    <input id="x" value="" type="hidden" name="content">
                    <trix-editor input="x"></trix-editor>
                    </div>
                </div>
                <div class="row justify-content-end pt-2">
                    <div class="col-sm-4">
                        <a class="btn btn-secondary text-white" href="{{ route('admin.kategoriberita') }}">back</a>
                        <a class="btn btn-primary text white" href="#">Draft</a>
                        <button type="submit" class="btn btn-success">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListner('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
@endsection
