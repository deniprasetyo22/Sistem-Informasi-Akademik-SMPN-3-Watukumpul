@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Materi Bahasa Inggris')

@section('Page Title', 'Edit Materi Bahasa Inggris')

@section('link', '/admin-materi-bahasainggris')

@section('back', 'Materi Bahasa Inggris')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-materi-bahasainggris/{{ $bahasainggris->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ $bahasainggris->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">File</label>
                <input class="form-control" type="file" id="file" name="file">
                <div class="text-center mt-3">
                    <p>{{ $bahasainggris->file }}</p>
                </div>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
