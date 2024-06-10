@extends('layouts.admin-layout')

@section('title', 'Admin | Dashboard')

{{-- @section('user', '{{Auth::user()->name}}') --}}

@section('content')

    <div>
        <h3 class="card-title text-center mb-5">SMP Negeri 3 Watukumpul</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-profilsekolah">
                        <img src="{{ url('image/bg_profil.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Profil Sekolah
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-profilsekolah" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-gurudankaryawan">
                        <img src="{{ url('image/bg_gurudankaryawan.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Guru dan Karyawan
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-gurudankaryawan" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-berita">
                        <img src="{{ url('image/bg_berita.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Berita
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-berita" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-mading">
                        <img src="{{ url('image/bg_mading.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Mading
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-mading" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-ekstrakurikuler">
                        <img src="{{ url('image/bg_ekstrakurikuler.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Ekstrakurikuler
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-ekstrakurikuler" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-jadwal">
                        <img src="{{ url('image/bg_jadwal.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Jadwal Pelajaran
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-jadwal" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-materi">
                        <img src="{{ url('image/bg_materi.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Materi Pelajaran
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-materi" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-nilai">
                        <img src="{{ url('image/bg_nilai.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Nilai
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-nilai" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-kontak">
                        <img src="{{ url('image/bg_kontak.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Kontak
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-kontak" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="/admin-user">
                        <img src="{{ url('image/bg_users.jpg') }}">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            Users
                        </h4>
                    </div>
                    <div class="card-read-more">
                        <a href="/admin-user" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
