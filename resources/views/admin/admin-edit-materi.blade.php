@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Materi')

@section('Page Title', 'Edit Materi')

@section('link', '/admin-materi')

@section('back', 'Materi')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-materi/{{ $materi->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="matapelajaran">Mata Pelajaran</label>
                <select name="matapelajaran" id="matapelajaran" class="form-control">
                    @foreach ($matapelajaran as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="judul">Materi</label>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ $materi->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">File</label>
                <input class="form-control" type="file" id="file" name="file">
                <div class="text-center">
                    <p>{{ $materi->file }}</p>
                </div>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
