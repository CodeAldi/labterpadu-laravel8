@extends('layouts.front.main')

@section('content')
    @forelse ($berita as $item)
    <div class="card my-2">
        <img src="{{ asset('storage/'.$item->thumbnail) }}" class="" alt="..." style="height: 20%">
        <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            @foreach ($kategoris as $kategori)
            @if ($kategori->id == $item->kategori_berita_id)
            <p class="card-text"><small class="text-body-secondary">Kategori : {{ $kategori->nama }}</small></p>
            @endif
            @endforeach
            <div class="card-body">
                <p class="card-text">{!! $item->body !!}</p>
            </div>
        </div>
    </div>
        
    @empty
    
    <div class="card my-5">
        <h1 class="card-title">Data Masih kosong</h1>
    </div>
    @endforelse
@endsection