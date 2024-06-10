@extends('layouts.main-layout')

@section('title', 'Materi Seni Budaya')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Materi Seni Budaya</h2>
    </div>

    <div class="row">
        @if (Auth::user()->role_id == 2)
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                </button>

                <a href="/tugas-senibudaya" class="btn btn-success mb-3">Tugas</a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <form action="/add-materi-senibudaya" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Materi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" name="judul" id="judul" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="file" class="form-label">File</label>
                                        <input class="form-control" type="file" id="file" name="file">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-success" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-10">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                        <button class="input-group-text btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        @elseif (Auth::user()->role_id == 3)
            <div class="col">
                <a href="/tugas-senibudaya" class="btn btn-success mb-3">Tugas</a>
            </div>
            <div class="col-9 col-sm-11">
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
                    <th>Judul</th>
                    <th>File</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($materi->reverse() as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->file }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>
                            <a href="storage/file/materi/{{ $data->file }}" class="btn btn-success">Download</a>
                            @if (Auth::User()->role_id == 2)
                                <form action="/delete-materi-senibudaya/{{ $data->id }}" method="POST"
                                    style="display: inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

    <div>
        {{ $materi->withQueryString()->links() }}
    </div>

@endsection
