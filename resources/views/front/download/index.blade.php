@extends('layouts.front.main')

@section('content')
<main>
    <div class="container">
        @forelse ($dokumens as $item)
            <div class="row pt-4 border my-3 shadow rounded">
                <div class="col-md-2 text-center">
                    @switch($item->extension)
                        @case('pdf')
                        <img src="{{ asset('images/pdf-icon.png') }}" width="50%" alt="">
                            
                            @break
                        @case('xls')
                            <img src="{{ asset('images/excel-icon.png') }}" width="50%" alt="">
                            @break
                        @case('xlsx')
                            <img src="{{ asset('images/excel-icon.png') }}" width="50%" alt="">
                            @break
                        @case('ppt')
                            <img src="{{ asset('images/ppt-icon.png') }}" width="50%" alt="">
                            @break
                        @case('pptx')
                            <img src="{{ asset('images/ppt-icon.png') }}" width="50%" alt="">
                            @break
                        @case('docx')
                            <img src="{{ asset('images/word-icon.png') }}" width="50%" alt="">
                            @break
                        @default
                            <img src="{{ asset('images/word-icon.png') }}" width="50%" alt="">
                    @endswitch
                </div>
                <div class="col-md-8 my-auto">
                    <h2>{{ $item->judul }}.{{ $item->extension }}</h2>
                </div>
                <div class="col-md-2 d-flex flex-column justify-content-evenly">
                    <a href="{{ route('front.download.proses',['id'=>$item->id]) }}" class="btn btn-success"><i class="fa-solid fa-file-arrow-down"></i> Download </a>
                </div>
            </div>
        @empty
        <div class="row py-4 border my-3 shadow rounded">
            <div class="col-md-2">
                <img src="{{ asset('images/pdf-icon.png') }}" width="100%"  alt="">
            </div>
            <div class="col-md-8 my-auto">
                <h2>judul</h2>
                <p>deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                    deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                    deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                    deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                    deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                </p>
            </div>
            <div class="col-md-2 d-flex flex-column justify-content-evenly">
                <a href="" class="btn btn-success"><i class="fa-solid fa-file-arrow-down"></i> Download </a>
            </div>
        </div>
        <div class="row py-4 border my-3 shadow rounded">
            <div class="col-md-2">
                <img src="{{ asset('images/pdf-icon.png') }}" width="100%"  alt="">
            </div>
            <div class="col-md-8 my-auto">
                <h2>judul</h2>
                <p>deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                    deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                    deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                    deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                    deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi
                </p>
            </div>
            <div class="col-md-2 d-flex flex-column justify-content-evenly">
                <a href="" class="btn btn-success"><i class="fa-solid fa-file-arrow-down"></i> Download </a>
            </div>
        </div>
        @endforelse
    </div>
</main>
@endsection