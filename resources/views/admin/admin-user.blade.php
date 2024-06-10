@extends('layouts.admin-layout')

@section('title', 'Admin | User')

@section('Page Title', 'User')

@section('content')

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary mb-3" href="/admin-add-user">Tambah</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-user-admin">
                        <img src="{{ url('image/bg_admin.png') }}">
                    </a>
                    <div class="card-content">
                        <a href="/admin-user-admin">
                            <h4 class="card-title text-center">
                                Admin
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-user-teacher">
                        <img src="{{ url('image/bg_teacher.png') }}">
                    </a>
                    <div class="card-content">
                        <a href="/admin-user-teacher">
                            <h4 class="card-title text-center">
                                Teacher
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-user-student">
                        <img src="{{ url('image/bg_student.png') }}">
                    </a>
                    <div class="card-content">
                        <a href="/admin-user-student">
                            <h4 class="card-title text-center">
                                Student
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($user as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
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
    </div> --}}

@endsection
