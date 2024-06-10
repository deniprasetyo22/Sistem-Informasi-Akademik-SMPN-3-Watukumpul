@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Mata Pelajaran')

@section('Page Title', 'Edit Mata Pelajaran')

@section('link', '/admin-matapelajaran')

@section('back', 'Mata Pelajaran')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-matapelajaran/{{ $matapelajaran->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama">Mata Pelajaran</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ $matapelajaran->nama }}" required>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
