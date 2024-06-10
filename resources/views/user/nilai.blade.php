@extends('layouts.main-layout')

@section('title', 'Nilai')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Nilai</h2>
    </div>

    <div class="row">
        @if (Auth::user()->role_id == 2)
            <div class="col">
                <a href="/add-nilai" class="btn btn-primary mb-3">Tambah</a>
            </div>
            <div class="col-sm-11">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                        <button class="input-group-text btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        @else
            <div class="col">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                        <button class="input-group-text btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        @endif
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
            @foreach ($nilai->sortBy('nama') as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->semester }}</td>
                        <td>
                            <a class="btn btn-success" href="/detail-nilai/{{ $data->id }}">Detail</a>
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
