@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Siswa')

@section('Page Title', 'Edit Siswa')

@section('link', '/admin-siswa')

@section('back', 'Siswa')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-siswa/{{ $siswa->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nisn">NISN</label>
                <input type="number" step="any" class="form-control" name="nisn" id="nisn" required
                    value="{{ $siswa->nisn }}">
            </div>
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" required
                    value="{{ $siswa->nama }}">
            </div>
            <div class="mb-3">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select class="form-control" name="jeniskelamin" id="select" required>
                    <option value="{{ $siswa->jeniskelamin }}">{{ $siswa->jeniskelamin }}</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection
