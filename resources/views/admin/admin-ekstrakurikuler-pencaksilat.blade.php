@extends('layouts.admin-layout')

@section('title', 'Admin | Ekstrakurikuler Pencak Silat')

@section('Page Title', 'Ekstrakurikuler Pencak Silat')

@section('content')

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary mb-3" href="/admin-add-ekstrakurikuler-pencaksilat">Tambah</a>
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

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($pencaksilat->reverse() as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td><img src="{{ url('storage/foto/ekstrakurikuler/' . $data->foto) }}" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-warning" href="/admin-edit-ekstrakurikuler-pencaksilat/{{ $data->id }}">Edit</a>
                            <form action="/admin-delete-ekstrakurikuler-pencaksilat/{{ $data->id }}" method="POST"
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
        {{ $pencaksilat->withQueryString()->links() }}
    </div>

@endsection
