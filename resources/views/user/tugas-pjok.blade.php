@extends('layouts.main-layout')

@section('title', 'Tugas PJOK')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Tugas Pendidikan Jasmani, Olahraga, dan Kesehatan</h2>
    </div>

    <div class="row">
        @if (Auth::user()->role_id == 3)
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Upload Tugas
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <form action="/add-tugas-pjok" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Tugas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nisn">NISN</label>
                                        <select class="form-select" id="single-select-field1" name="nisn"
                                            data-placeholder="Masukan NISN" required>
                                            <option></option>
                                            @foreach ($siswa as $data)
                                                <option value="{{ $data->nisn }}">{{ $data->nisn }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama">Nama</label>
                                        <select class="form-select" id="single-select-field2" name="nama"
                                            data-placeholder="Masukan Nama" required>
                                            <option></option>
                                            @foreach ($siswa as $data)
                                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelas">Kelas</label>
                                        <select class="form-select" name="kelas" id="kelas" required>
                                            <option value="">--Pilih Kelas--</option>
                                            <option value="7A">7A</option>
                                            <option value="7B">7B</option>
                                            <option value="7C">7C</option>
                                            <option value="7D">7D</option>
                                            <option value="7E">7E</option>
                                            <option value="8A">8A</option>
                                            <option value="8B">8B</option>
                                            <option value="8C">8C</option>
                                            <option value="8D">8D</option>
                                            <option value="8E">8E</option>
                                            <option value="9A">9A</option>
                                            <option value="9B">9B</option>
                                            <option value="9C">9C</option>
                                            <option value="9D">9D</option>
                                            <option value="9E">9E</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" name="judul" id="judul" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="file" class="form-label">File</label>
                                        <input class="form-control" type="file" id="file" name="file" required>
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
            <div class="col-sm-10 col-7">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                        <button class="input-group-text btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        @else
            <div>
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
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    @if (Auth::User()->role_id == 2)
                        <th>Action</th>
                    @endif
                </tr>
            </thead>
            @foreach ($tugaspjok->reverse() as $data)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->kelas }}</td>
                        <td>{{ $data->file }}</td>
                        <td>{{ $data->created_at }}</td>
                        @if (Auth::User()->role_id == 2)
                            <td>
                                <a href="storage/file/tugas/{{ $data->file }}" class="btn btn-success">Download</a>
                                <form action="/delete-tugas-pjok/{{ $data->id }}" method="POST"
                                    style="display: inline-block">
                                </form>
                            </td>
                        @endif
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

    <div>
        {{ $tugaspjok->withQueryString()->links() }}
    </div>

@endsection
