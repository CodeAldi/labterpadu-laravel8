@extends('layouts.back.main')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="{{ asset('dashboard-assets/img/elements/category.png') }}" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Kategori Berita</h5>
                            <p class="card-text">
                                Jumlah : {{ $kategori }} Kategori Berita
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="{{ asset('dashboard-assets/img/elements/library.png') }}" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Berita</h5>
                            <p class="card-text">
                                jumlah : {{ $berita }} Berita
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="{{ asset('dashboard-assets/img/elements/images.png') }}" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Galeri</h5>
                            <p class="card-text">
                                jumlah : {{ $galeri }} gambar digaleri
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="{{ asset('dashboard-assets/img/elements/folder.png') }}" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">File dokumen</h5>
                            <p class="card-text">
                                jumlah : {{ $dokumen }} di Dokumen
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection