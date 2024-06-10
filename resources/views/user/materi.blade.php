@extends('layouts.main-layout')

@section('title', 'Materi Pelajaran')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Materi Pelajaran</h2>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-bahasaindonesia" class="h4" class="card-title">
                    <img src="{{ url('image/bg_bahasaindonesia.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-bahasaindonesia" class="h4" class="card-title">Bahasa Indonesia</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-matematika" class="h4" class="card-title">
                    <img src="{{ url('image/bg_matematika.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-matematika" class="h4" class="card-title">Matematika</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-bahasainggris" class="h4" class="card-title">
                    <img src="{{ url('image/bg_bahasainggris.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-bahasainggris" class="h4" class="card-title">Bahasa Inggris</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-ipa" class="h4" class="card-title">
                    <img src="{{ url('image/bg_ipa.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-ipa" class="h4" class="card-title">Ilmu Pengetahuan Alam</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-ips" class="h4" class="card-title">
                    <img src="{{ url('image/bg_ips.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-ips" class="h4" class="card-title">Ilmu Pengetahuan Sosial</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-pabp" class="h4" class="card-title">
                    <img src="{{ url('image/bg_pabp.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-pabp" class="h4" class="card-title">Pendidikan Agama dan Budi Pekerti</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-ppkn" class="h4" class="card-title">
                    <img src="{{ url('image/bg_ppkn.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-ppkn" class="h4" class="card-title">Pendidikan Pancasila dan Kewarganegaraan</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-senibudaya" class="h4" class="card-title">
                    <img src="{{ url('image/bg_senibudaya.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-senibudaya" class="h4" class="card-title">Seni Budaya</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-pjok" class="h4" class="card-title">
                    <img src="{{ url('image/bg_pjok.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-pjok" class="h4" class="card-title">Pendidikan Jasmani, Olahraga, dan Kesehatan</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card text-center">
                <a href="/materi-prakarya" class="h4" class="card-title">
                    <img src="{{ url('image/bg_prakarya.jpg') }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="/materi-prakarya" class="h4" class="card-title">Prakarya</a>
                </div>
            </div>
            <br>
        </div>
    </div>

@endsection
