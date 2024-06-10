@extends('layouts.main-layout')

@section('title', 'Detail Berita')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Detail Berita</h2>
    </div>

    <div class="my-3 d-flex justify-content-center">
        <img src="{{ url('storage/foto/berita/' . $detail->foto) }}" alt="" width="70%">
    </div>
    <h4 class="mb-3 text-center">{{ $detail->judul }}</h4>
    <p class="mb-5">{{ $detail->deskripsi }}</p>

@endsection
