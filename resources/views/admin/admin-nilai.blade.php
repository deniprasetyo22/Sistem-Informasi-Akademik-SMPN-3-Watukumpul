@extends('layouts.admin-layout')

@section('title', 'Admin | Nilai')

@section('Page Title', 'Nilai')

@section('content')

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary mb-3" href="/admin-add-nilai">Tambah</a>
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
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>NISN</th>
                    <th>Semester</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($nilai->reverse() as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->semester }}</td>
                        <td>
                            <a class="btn btn-success" href="/admin-detail-nilai/{{ $data->id }}">Detail</a>
                            <a class="btn btn-warning" href="/admin-edit-nilai/{{ $data->id }}">Edit</a>
                            <form action="/admin-delete-nilai/{{ $data->id }}" method="POST"
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
        {{ $nilai->withQueryString()->links() }}
    </div>

@endsection
