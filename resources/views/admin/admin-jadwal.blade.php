@extends('layouts.admin-layout')

@section('title', 'Admin | Jadwal Pelajaran')

@section('Page Title', 'Jadwal Pelajaran')

@section('content')

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary mb-3" href="/admin-add-jadwal">Tambah</a>
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
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($jadwal->sortBy('kelas') as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->kelas }}</td>
                        <td>
                            <a class="btn btn-success" href="/admin-detail-jadwal/{{ $data->id }}">Detail</a>
                            <form action="/admin-delete-jadwal/{{ $data->id }}" method="POST"
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
        {{ $jadwal->withQueryString()->links() }}
    </div>

@endsection
