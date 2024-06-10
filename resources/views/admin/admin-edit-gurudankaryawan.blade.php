@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Guru dan Karyawan')

@section('Page Title', 'Edit Guru dan Karyawan')

@section('link', '/admin-gurudankarywan')

@section('back', 'Guru dan Karyawan')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-gurudankaryawan/{{ $gurudankaryawan->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ $gurudankaryawan->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ $gurudankaryawan->jabatan }}" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
                <div class="text-center">
                    <img src="{{ url('storage/foto/gurudankaryawan/' . $gurudankaryawan->foto) }}" alt="" width="200px">
                </div>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
