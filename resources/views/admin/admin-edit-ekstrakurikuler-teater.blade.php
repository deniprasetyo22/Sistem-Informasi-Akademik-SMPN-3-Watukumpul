@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Ekstrakurikuler Teater')

@section('Page Title', 'Edit Ekstrakurikuler Teater')

@section('link', '/admin-ekstrakurikuler-teater')

@section('back', 'Ekstrakurikuler Teater')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-ekstrakurikuler-teater/{{ $teater->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $teater->deskripsi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
                <div class="text-center">
                    <img src="{{ url('storage/foto/ekstrakurikuler/' . $teater->foto) }}" alt="" width="200px">
                </div>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
