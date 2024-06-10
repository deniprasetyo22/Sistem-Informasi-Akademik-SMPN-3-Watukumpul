@extends('layouts.admin-layout')

@section('title', 'Admin | Materi PPKN')

@section('Page Title', 'Tugas Pendidikan Pancasila dan Kewarganegaraan')

@section('link', '/admin-materi')

@section('back', 'Materi')

@section('link2', '/admin-materi-ppkn')

@section('back2', 'Materi Pendidikan Pancasila dan Kewarganegaraan')

@section('content')

    <div class="row">
        <div>
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
                    <th>Kelas</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($tugasppkn->reverse() as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->kelas }}</td>
                        <td>{{ $data->file }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>
                            <a href="storage/file/tugas/{{ $data->file }}" class="btn btn-success">Download</a>
                            <form action="/admin-delete-tugas-ppkn/{{ $data->id }}" method="POST"
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
        {{ $tugasppkn->withQueryString()->links() }}
    </div>

@endsection
