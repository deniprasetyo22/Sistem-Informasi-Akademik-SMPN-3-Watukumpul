@extends('layouts.admin-layout')

@section('title', 'Admin | Add User')

@section('Page Title', 'Tambah Data User')

@section('link', '/admin-user')

@section('back', 'User')

@section('content')

    <div class="mt-5 col-8 m-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/admin-user" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nisn">NISN</label>
                <input type="number" class="form-control" name="nisn" id="nisn" required>
            </div>
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select class="form-control" name="jeniskelamin" id="select" required>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="role_id">Role</label>
                <select name="role_id" id="role_id" class="form-select" required>
                    <option value="">--Pilih Role--</option>
                    <option value="1">Admin</option>
                    <option value="2">Teacher</option>
                    <option value="3">Student</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" minlength="8" required>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
