@extends('layouts.main-layout')

@section('title', 'Detail Mading')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Detail Mading</h2>
    </div>

    <div class="my-3 d-flex justify-content-center">
        <img src="{{ url('storage/foto/mading/' . $detail->foto) }}" alt="" width="70%">
    </div>
    <h4 class="mb-3 text-center">{{ $detail->judul }}</h4>
    <p class="mb-5">{{ $detail->deskripsi }}</p>


@endsection
