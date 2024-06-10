@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Materi IPA')

@section('Page Title', 'Edit Materi IPA')

@section('link', '/admin-materi-ipa')

@section('back', 'Materi Ilmu Pengetahuan Alam')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-materi-ipa/{{ $ipa->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ $ipa->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">File</label>
                <input class="form-control" type="file" id="file" name="file">
                <div class="text-center mt-3">
                    <p>{{ $ipa->file }}</p>
                </div>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
