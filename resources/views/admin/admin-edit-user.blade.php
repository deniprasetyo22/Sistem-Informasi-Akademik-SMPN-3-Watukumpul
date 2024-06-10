@extends('layouts.admin-layout')

@section('title', 'Admin | Edit User')

@section('Page Title', 'Edit User')

@section('link', '/admin-user')

@section('back', 'User')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" name="nisn" id="nisn" required value="{{ $user->nisn }}">
            </div>
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" required
                    value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select class="form-control" name="jeniskelamin" id="select" required>
                    <option value="{{ $user->jeniskelamin }}">{{ $user->jeniskelamin }}</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required
                    value="{{ $user->email }}">
            </div>
            <div class="mb-3">
                <label for="role_id">Role</label>
                <select name="role_id" id="role_id" class="form-select" required>
                    <option value="{{ $user->role_id }}">{{ $user->role['name'] }}</option>
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
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection
