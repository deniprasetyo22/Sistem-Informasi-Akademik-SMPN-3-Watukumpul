@extends('layouts.admin-layout')

@section('title', 'Admin | Materi Pelajaran')

@section('Page Title', 'Materi Pelajaran')

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mata Pelajaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bahasa Indonesia</td>
                    <td><a href="/admin-materi-bahasaindonesia" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Matematika</td>
                    <td><a href="/admin-materi-matematika" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bahasa Inggris</td>
                    <td><a href="/admin-materi-bahasainggris" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ilmu Pengetahuan Alam</td>
                    <td><a href="/admin-materi-ipa" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ilmu Pengetahuan Sosial</td>
                    <td><a href="/admin-materi-ips" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Pendidikan Agama dan Budi Pekerti</td>
                    <td><a href="/admin-materi-pabp" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                    <td><a href="/admin-materi-ppkn" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Seni Budaya</td>
                    <td><a href="/admin-materi-senibudaya" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
                    <td><a href="/admin-materi-pjok" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Prakarya</td>
                    <td><a href="/admin-materi-prakarya" class="btn btn-success">Detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
