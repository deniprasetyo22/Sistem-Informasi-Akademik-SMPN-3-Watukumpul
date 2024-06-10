@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Materi Seni Budaya')

@section('Page Title', 'Edit Materi Seni Budaya')

@section('link', '/admin-materi-senibudaya')

@section('back', 'Materi Seni Budaya')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-materi-senibudaya/{{ $senibudaya->id }}" method="POST" enctype="multipsrt/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ $senibudaya->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">File</label>
                <input class="form-control" type="file" id="file" name="file">
                <div class="text-center mt-3">
                    <p>{{ $senibudaya->file }}</p>
                </div>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
