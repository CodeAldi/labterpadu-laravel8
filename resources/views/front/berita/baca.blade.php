@extends('layouts.front.main')

@section('content')
    <div class="container">
        <div class="card my-5">
            <div class="card-body">
                <h2 class="card-title text-center text-capitalize">{{ $berita->judul }}</h2>
                @foreach ($kategoris as $kategori)
                @if ($kategori->id == $berita->kategori_berita_id)
                <p class="card-text text-center"><small class="text-body-secondary">Kategori : {{ $kategori->nama }}</small></p>
                <p class="card-text text-center"><small class="text-body-secondary">{{ date('d-M-Y',strtotime($berita->created_at)) }}</small></p>
                @endif
                @endforeach
                <img src="{{ asset('storage/'.$berita->thumbnail) }}" alt="" class="card-img">
                <p class="text-break">{!! $berita->body !!}</p>
            </div>
        </div>
    </div>
@endsection