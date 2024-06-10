@extends('layouts.admin-layout')

@section('title', 'Admin | Materi PJOK')

@section('Page Title', 'Pendidikan Jasmani, Olahraga, dan Kesehatan')

@section('link', '/admin-materi')

@section('back', 'Materi')

@section('content')

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary mb-3" href="/admin-add-materi-pjok">Tambah</a>
            <a class="btn btn-success mb-3" href="/admin-tugas-pjok">Tugas</a>
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
                    <th>Judul</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($pjok->reverse() as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->judul }}</td>
                        <td><a href="storage/file/materi/{{ $data->file }}">{{ $data->file }}</a></td>
                        <td>
                            <a class="btn btn-warning" href="/admin-edit-materi-pjok/{{ $data->id }}">Edit</a>
                            <form action="/admin-delete-materi-pjok/{{ $data->id }}" method="POST"
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
        {{ $pjok->withQueryString()->links() }}
    </div>

@endsection

