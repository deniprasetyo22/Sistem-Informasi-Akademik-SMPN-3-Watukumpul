@extends('layouts.admin-layout')

@section('title', 'Admin | Detail Nilai')

@section('Page Title', 'Detail Nilai')

@section('link', '/admin-nilai')

@section('back', 'Nilai')

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>NISN</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $nilai->nama }}</td>
                    <td>{{ $nilai->jenis_kelamin }}</td>
                    <td>{{ $nilai->nisn }}</td>
                    <td>{{ $nilai->semester }}</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr class="align middle">
                    <th>Mata Pelajaran</th>
                    <th>Pengetahuan</th>
                    <th>Keterampilan</th>
                    <th>Sikap Spiritual dan Sosial</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pendidikan Agama dan Budi Pekerti</td>
                    <td>{{$nilai->pabp_a}}</td>
                    <td>{{$nilai->pabp_b}}</td>
                    <td>{{$nilai->pabp_c}}</td>
                </tr>
                <tr>
                    <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                    <td>{{$nilai->ppkn_a}}</td>
                    <td>{{$nilai->ppkn_b}}</td>
                    <td>{{$nilai->ppkn_c}}</td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>{{$nilai->b_indo_a}}</td>
                    <td>{{$nilai->b_indo_b}}</td>
                    <td>{{$nilai->b_indo_c}}</td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>{{$nilai->mtk_a}}</td>
                    <td>{{$nilai->mtk_b}}</td>
                    <td>{{$nilai->mtk_c}}</td>
                </tr>
                <tr>
                    <td>Ilmu Pengetahuan Alam</td>
                    <td>{{$nilai->ipa_a}}</td>
                    <td>{{$nilai->ipa_b}}</td>
                    <td>{{$nilai->ipa_c}}</td>
                </tr>
                <tr>
                    <td>Ilmu Pengetahuan Sosial</td>
                    <td>{{$nilai->ips_a}}</td>
                    <td>{{$nilai->ips_b}}</td>
                    <td>{{$nilai->ips_c}}</td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>{{$nilai->b_inggris_a}}</td>
                    <td>{{$nilai->b_inggris_b}}</td>
                    <td>{{$nilai->b_inggris_c}}</td>
                </tr>
                <tr>
                    <td>Seni Budaya</td>
                    <td>{{$nilai->seni_budaya_a}}</td>
                    <td>{{$nilai->seni_budaya_b}}</td>
                    <td>{{$nilai->seni_budaya_c}}</td>
                </tr>
                <tr>
                    <td>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                    <td>{{$nilai->pjok_a}}</td>
                    <td>{{$nilai->pjok_b}}</td>
                    <td>{{$nilai->pjok_c}}</td>
                </tr>
                <tr>
                    <td>Prakarya</td>
                    <td>{{$nilai->prakarya_a}}</td>
                    <td>{{$nilai->prakarya_b}}</td>
                    <td>{{$nilai->prakarya_c}}</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
