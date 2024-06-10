@extends('layouts.admin-layout')

@section('title', 'Admin | Add Materi IPS')

@section('Page Title', 'Tambah Materi IPS')

@section('link', '/admin-materi')

@section('back', 'Ilmu Pengetahuan Sosial')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-materi-ips" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" required>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">File</label>
                <input class="form-control" type="file" id="file" name="file">
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
