@extends('layouts.main-layout')

@section('title', 'Profil')

@section('content')

    <div class="text-center">
        <h2>Profil Sekolah</h2>
    </div>
    <div>
        @foreach ($profil as $data)
            <div id="container1" class="container1">
                <div class="col-lg d-flex align-items-stretch">
                    <div class="info">
                        <h5 class="text-center">Biodata Sekolah</h5>
                        <div class="col-sm-7 mx-auto">
                            <table class="table responsive table-borderless">
                                <tr>
                                    <td class="col-3">Nama Sekolah</td>
                                    <td class="col-3 text-center">:</td>
                                    <td class="col-3">{{ $data->namasekolah }}</td>
                                </tr>
                                <tr>
                                    <td class="col-3">NPSN</td>
                                    <td class="col-3 text-center">:</td>
                                    <td class="col-3">{{ $data->npsn }}</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Status Sekolah</td>
                                    <td class="col-3 text-center">:</td>
                                    <td class="col-3">{{ $data->statussekolah }}</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Bentuk Sekolah</td>
                                    <td class="col-3 text-center">:</td>
                                    <td class="col-3">{{ $data->bentuksekolah }}</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Status Kepemilikan</td>
                                    <td class="col-3 text-center">:</td>
                                    <td class="col-3">{{ $data->statuskepemilikan }}</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Akreditasi</td>
                                    <td class="col-3 text-center">:</td>
                                    <td class="col-3">{{ $data->akreditasi }}</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Kurikulum</td>
                                    <td class="col-3 text-center">:</td>
                                    <td class="col-3">{{ $data->kurikulum }}</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Jumlah Guru</td>
                                    <td class="col-3 text-center">:</td>
                                    <td class="col-3">{{ $data->jumlahguru }}</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Jumlah Siswa</td>
                                    <td class="col-3 text-center">:</td>
                                    <td class="col-3">{{ $data->jumlahsiswa }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container1" class="container1">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="info text-center">
                                <h5>Visi</h5>
                                <tr>
                                    <td>{{ $data->visi }}</td>
                                </tr>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="info">
                                <h5 class="text-center">Misi</h5>
                                <td>
                                    <div style="white-space: pre-line">{{ $data->misi }}</div>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container1" class="container1">
                <div class="col-lg d-flex align-items-stretch">
                    <div class="info">
                        <h5 class="text-center">Struktur Organisasi Sekolah</h5>
                        <div class="text-center">
                            <img src="{{ url('storage/foto/struktur/' . $data->struktur) }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div id="container1" class="container1">
            <div class="col-lg d-flex align-items-stretch">
                <div class="info">
                    <h5 class="text-center mb-3">Guru dan Karyawan</h5>
                    <div class="row">
                        @foreach ($gurudankaryawan as $data)
                            <div class="col-md-3 mb-3 d-flex justify-content-center">
                                <div class="card text-center" style="width: 18rem;">
                                    <img src="{{ url('storage/foto/gurudankaryawan/' . $data->foto) }}" width="100%"
                                        height="auto" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $data->nama }}</h5>
                                        <h6 class="card-text">{{ $data->jabatan }}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
