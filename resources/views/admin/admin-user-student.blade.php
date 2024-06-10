@extends('layouts.admin-layout')

@section('title', 'Admin | User')

@section('Page Title', 'Student')

@section('link', '/admin-user')

@section('back', 'User')

@section('content')

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary mb-3" href="/admin-add-user">Tambah</a>
        </div>
        <div class="col-6">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                    <button class="input-group-text btn btn-primary"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($user as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->jeniskelamin }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->role['name'] }}</td>
                        <td>
                            <a class="btn btn-warning" href="/admin-edit-user/{{ $data->id }}">Edit</a>
                            <form action="/admin-delete-user/{{ $data->id }}" method="POST"
                                style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <div>
        {{ $user->withQueryString()->links() }}
    </div>

@endsection
