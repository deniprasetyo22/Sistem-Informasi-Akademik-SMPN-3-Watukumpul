@extends('layouts.admin-layout')

@section('title', 'Admin | Add Materi')

@section('Page Title', 'Tambah Data Materi')

@section('link', '/admin-materi')

@section('back', 'Materi')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-materi" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="matapelajaran">Mata Pelajaran</label>
                <select name="matapelajaran" id="matapelajaran" class="form-control">
                    <option value="">--Pilih Mata Pelajaran--</option>
                    @foreach ($matapelajaran as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                    @endforeach
                </select>
            </div>
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
