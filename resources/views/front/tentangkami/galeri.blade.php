@extends('layouts.front.main')

@section('content')
    <div class="container mt-4">
        <div class="card shadow py-2 px-3">
            <h1 class="text-decoration-underline">Galeri</h1>
            <div class="row gy-3">
                @forelse ($galeris as $item)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">

                            <img src="{{ asset('storage/'.$item->path) }}" alt="" class="card-img-top">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-subtitle">{{ $item->desc }}</p>
                        </div>
                    </div>
                </div>
                    
                @empty
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/dummy_600x400.png') }}" alt="">
                        <p>description description descrition</p>
                    </div>
                </div>
                    
                @endforelse
            </div>
        </div>
    </div>
@endsection