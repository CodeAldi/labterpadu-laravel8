@extends('layouts.back.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Create New Category For News</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.kategoriberita.store') }}">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="nama"  required/>
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="form-text text-danger">{{ $error }}</div>
                        {{-- <div class="form-text text-danger">* nama kategori tidak boleh kosong atau sama dengan nama kategori yang sudah ada</div> --}}    
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <a class="btn btn-secondary text-white" href="{{ route('admin.kategoriberita') }}">back</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection