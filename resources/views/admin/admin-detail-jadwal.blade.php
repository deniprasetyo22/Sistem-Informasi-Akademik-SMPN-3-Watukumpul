@extends('layouts.admin-layout')

@section('title', 'Admin | Detail Jadwal')

@section('Page Title', 'Detail Jadwal')

@section('link', '/admin-jadwal')

@section('back', 'Jadwal')

@section('content')

    <div class="mt-5 m-auto">
        <div class="mb-3">
            <h4>Kelas : {{ $jadwal->kelas }}</h4>
        </div>
        <div class="table-responsive ">
            <table class="table table-bordered text-center">
                <thead class="align-middle">
                    <tr>
                        <th rowspan="2">Jam ke-</th>
                        <th rowspan="2">Waktu</th>
                        <th colspan="6">Hari</th>
                    </tr>
                    <tr>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                        <th>Sabtu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $jadwal->jam1 }}</td>
                        <td>{{ $jadwal->senin1 }}</td>
                        <td>{{ $jadwal->selasa1 }}</td>
                        <td>{{ $jadwal->rabu1 }}</td>
                        <td>{{ $jadwal->kamis1 }}</td>
                        <td>{{ $jadwal->jumat1 }}</td>
                        <td>{{ $jadwal->sabtu1 }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{ $jadwal->jam2 }}</td>
                        <td>{{ $jadwal->senin2 }}</td>
                        <td>{{ $jadwal->selasa2 }}</td>
                        <td>{{ $jadwal->rabu2 }}</td>
                        <td>{{ $jadwal->kamis2 }}</td>
                        <td>{{ $jadwal->jumat2 }}</td>
                        <td>{{ $jadwal->sabtu2 }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>{{ $jadwal->jam3 }}</td>
                        <td>{{ $jadwal->senin3 }}</td>
                        <td>{{ $jadwal->selasa3 }}</td>
                        <td>{{ $jadwal->rabu3 }}</td>
                        <td>{{ $jadwal->kamis3 }}</td>
                        <td>{{ $jadwal->jumat3 }}</td>
                        <td>{{ $jadwal->sabtu3 }}</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>{{ $jadwal->jam4 }}</td>
                        <td>{{ $jadwal->senin4 }}</td>
                        <td>{{ $jadwal->selasa4 }}</td>
                        <td>{{ $jadwal->rabu4 }}</td>
                        <td>{{ $jadwal->kamis4 }}</td>
                        <td>{{ $jadwal->jumat4 }}</td>
                        <td>{{ $jadwal->sabtu4 }}</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>{{ $jadwal->jam5 }}</td>
                        <td>{{ $jadwal->senin5 }}</td>
                        <td>{{ $jadwal->selasa5 }}</td>
                        <td>{{ $jadwal->rabu5 }}</td>
                        <td>{{ $jadwal->kamis5 }}</td>
                        <td>{{ $jadwal->jumat5 }}</td>
                        <td>{{ $jadwal->sabtu5 }}</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>{{ $jadwal->jam6 }}</td>
                        <td>{{ $jadwal->senin6 }}</td>
                        <td>{{ $jadwal->selasa6 }}</td>
                        <td>{{ $jadwal->rabu6 }}</td>
                        <td>{{ $jadwal->kamis6 }}</td>
                        <td>{{ $jadwal->jumat6 }}</td>
                        <td>{{ $jadwal->sabtu6 }}</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>{{ $jadwal->jam7 }}</td>
                        <td>{{ $jadwal->senin7 }}</td>
                        <td>{{ $jadwal->selasa7 }}</td>
                        <td>{{ $jadwal->rabu7 }}</td>
                        <td>{{ $jadwal->kamis7 }}</td>
                        <td>{{ $jadwal->jumat7 }}</td>
                        <td>{{ $jadwal->sabtu7 }}</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>{{ $jadwal->jam8 }}</td>
                        <td>{{ $jadwal->senin8 }}</td>
                        <td>{{ $jadwal->selasa8 }}</td>
                        <td>{{ $jadwal->rabu8 }}</td>
                        <td>{{ $jadwal->kamis8 }}</td>
                        <td>{{ $jadwal->jumat8 }}</td>
                        <td>{{ $jadwal->sabtu8 }}</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>{{ $jadwal->jam9 }}</td>
                        <td>{{ $jadwal->senin9 }}</td>
                        <td>{{ $jadwal->selasa9 }}</td>
                        <td>{{ $jadwal->rabu9 }}</td>
                        <td>{{ $jadwal->kamis9 }}</td>
                        <td>{{ $jadwal->jumat9 }}</td>
                        <td>{{ $jadwal->sabtu9 }}</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>{{ $jadwal->jam10 }}</td>
                        <td>{{ $jadwal->senin10 }}</td>
                        <td>{{ $jadwal->selasa10 }}</td>
                        <td>{{ $jadwal->rabu10 }}</td>
                        <td>{{ $jadwal->kamis10 }}</td>
                        <td>{{ $jadwal->jumat10 }}</td>
                        <td>{{ $jadwal->sabtu10 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mb-3">
            <a href="/admin-edit-jadwal/{{ $jadwal->id }}" class="btn btn-warning" type="submit">Edit</a>
        </div>
    </div>

@endsection
