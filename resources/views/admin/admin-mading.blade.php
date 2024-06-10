@extends('layouts.admin-layout')

@section('title', 'Admin | Mading')

@section('Page Title', 'Mading')

@section('content')

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary mb-3" href="/admin-add-mading">Tambah</a>
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
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($mading->reverse() as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td><img src="{{ url('storage/foto/mading/' . $data->foto) }}" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-warning" href="/admin-edit-mading/{{ $data->id }}">Edit</a>
                            <form action="/admin-delete-mading/{{ $data->id }}" method="POST"
                                style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger confirm-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <div>
        {{ $mading->withQueryString()->links() }}
    </div>

@endsection
