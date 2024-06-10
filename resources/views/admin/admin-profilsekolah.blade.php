@extends('layouts.admin-layout')

@section('title', 'Admin | Profil Sekolah')

@section('Page Title', 'Profil Sekolah')

@section('content')
    @foreach ($profil as $data)
        <a class="btn btn-warning mb-3" href="/admin-edit-profilsekolah/{{ $data->id }}">Edit</a>
    @endforeach

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="align-middle">
                <tr class="col-12">
                    <th class="col-4">Nama Sekolah</th>
                    <th class="col-4">NPSN</th>
                    <th class="col-4">Status Sekolah</th>
                </tr>
            </thead>
            @foreach ($profil as $data)
                <tbody class="align-middle">
                    <tr class="col-12">
                        <td class="col-4">{{ $data->namasekolah }}</td>
                        <td class="col-4">{{ $data->npsn }}</td>
                        <td class="col-4">{{ $data->statussekolah }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>

        <table class="table table-bordered text-center">
            <thead class="align-middle">
                <tr class="col-12">
                    <th class="col-4">Bentuk Sekolah</th>
                    <th class="col-4">Status Kepemilikan</th>
                    <th class="col-4">Akreditasi</th>
                </tr>
            </thead>
            @foreach ($profil as $data)
                <tbody class="align-middle">
                    <tr class="col-12">
                        <td class="col-4">{{ $data->bentuksekolah }}</td>
                        <td class="col-4">{{ $data->statuskepemilikan }}</td>
                        <td class="col-4">{{ $data->akreditasi }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>

        <table class="table table-bordered text-center">
            <thead class="align-middle">
                <tr class="col-12">
                    <th class="col-4">Kurikulum</th>
                    <th class="col-4">Jumlah Guru</th>
                    <th class="col-4">Jumlah Siswa</th>
                </tr>
            </thead>
            @foreach ($profil as $data)
                <tbody class="align-middle">
                    <tr class="col-12">
                        <td class="col-4">{{ $data->kurikulum }}</td>
                        <td class="col-4">{{ $data->jumlahguru }}</td>
                        <td class="col-4">{{ $data->jumlahsiswa }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>

        <table class="table table-bordered text-center">
            <thead class="align-middle">
                <tr class="col-12">
                    <th class="col-6">Visi</th>
                    <th class="col-6">Misi</th>
                </tr>
            </thead>
            @foreach ($profil as $data)
                <tbody class="align-middle">
                    <tr>
                        <td>{{ $data->visi }}</td>
                        <td style="white-space: pre-line">{{ $data->misi }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>

        <table class="table table-bordered text-center">
            <thead class="align-middle">
                <tr>
                    <th>Struktur Organisasi Sekolah</th>
                </tr>
            </thead>
            @foreach ($profil as $data)
                <tbody class="align-middle">
                    <tr>
                        <td><img src="{{ url('storage/foto/struktur/' . $data->struktur) }}" alt="" width="300px">
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
