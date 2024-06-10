@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Kontak')

@section('Page Title', 'Edit Kontak')

@section('link', '/admin-kontak')

@section('back', 'Kontak')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-kontak/{{ $kontak->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="telepon">Telepon</label>
                <input type="number" class="form-control" name="telepon" id="telepon" value="{{ $kontak->telepon }}" required>
            </div>
            <div class="mb-3">
                <label for="whatsapp">WhatsApp</label>
                <input type="number" class="form-control" name="whatsapp" id="whatsapp" value="{{ $kontak->whatsapp }}" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $kontak->email }}" required>
            </div>
            <div class="mb-3">
                <label for="instagram">Instagram</label>
                <input type="text" class="form-control" name="instagram" id="instagram" value="{{ $kontak->instagram }}" required>
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5">{{ $kontak->alamat }}</textarea>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection
