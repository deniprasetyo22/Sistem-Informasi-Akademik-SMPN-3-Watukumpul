@extends('layouts.admin-layout')

@section('title', 'Admin | Add Ekstrakurikuler PRAMUKA')

@section('Page Title', 'Tambah Ekstrakurikuler PRAMUKA')

@section('link', '/admin-ekstrakurikuler-pramuka')

@section('back', 'Ekstrakurikuler PRAMUKA')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-ekstrakurikuler-pramuka" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
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
