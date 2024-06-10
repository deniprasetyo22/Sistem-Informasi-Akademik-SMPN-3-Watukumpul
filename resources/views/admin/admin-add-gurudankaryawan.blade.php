@extends('layouts.admin-layout')

@section('title', 'Admin | Add Guru dan Karyawan')

@section('Page Title', 'Tambah Data Guru dan Karyawan')

@section('link', '/admin-gurudankaryawan')

@section('back', 'Guru dan Karyawan')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-gurudankaryawan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="mb-3">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
