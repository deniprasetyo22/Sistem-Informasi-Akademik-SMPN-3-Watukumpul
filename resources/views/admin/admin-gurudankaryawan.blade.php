@extends('layouts.admin-layout')

@section('title', 'Admin | Guru dan Karyawan')

@section('Page Title', 'Guru dan Karyawan')

@section('content')

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary mb-3" href="/admin-add-gurudankaryawan">Tambah</a>
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
                    <th>Jabatan</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($gurudankaryawan as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td><img src="{{ url('storage/foto/gurudankaryawan/' . $data->foto) }}" alt="" width="100px">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="/admin-edit-gurudankaryawan/{{ $data->id }}">Edit</a>
                            <form action="/admin-delete-gurudankaryawan/{{ $data->id }}" method="POST"
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
        {{ $gurudankaryawan->withQueryString()->links() }}
    </div>

@endsection
