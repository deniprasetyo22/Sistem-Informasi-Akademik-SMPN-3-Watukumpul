@extends('layouts.main-layout')

@section('title', 'Jadwal Pelajaran')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Jadwal Pelajaran</h2>
    </div>

    <div>
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Search">
                <button class="input-group-text btn btn-primary"><i class="bi bi-search"></i></button>
            </div>
        </form>
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
                            <a class="btn btn-success" href="/detail-jadwal/{{ $data->id }}">Detail</a>
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
