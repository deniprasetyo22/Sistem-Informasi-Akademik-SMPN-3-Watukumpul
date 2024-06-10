@extends('layouts.main-layout')

@section('title', 'Detail Nilai')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Detail Nilai</h2>
    </div>

    <div class="table-responsive">
        <div class="col-6">
            <table class="table table-borderless">
                <tr>
                    <td class="col-2">Nama</td>
                    <td class="col-4">: {{ $nilai->nama }}</td>
                </tr>
                <tr>
                    <td class="col-2">Jenis Kelamin</td>
                    <td class="col-4">: {{ $nilai->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td class="col-2">NISN</td>
                    <td class="col-4">: {{ $nilai->nisn }}</td>
                </tr>
                <tr>
                    <td class="col-2">Semester</td>
                    <td class="col-4">: {{ $nilai->semester }}</td>
                </tr>
            </table>
        </div>

        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr class="align-middle">
                    <th>Mata Pelajaran</th>
                    <th>Pengetahuan</th>
                    <th>Keterampilan</th>
                    <th>Sikap Spiritual dan Sosial</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pendidikan Agama dan Budi Pekerti</td>
                    <td>{{ $nilai->pabp_a }}</td>
                    <td>{{ $nilai->pabp_b }}</td>
                    <td>{{ $nilai->pabp_c }}</td>
                </tr>
                <tr>
                    <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                    <td>{{ $nilai->ppkn_a }}</td>
                    <td>{{ $nilai->ppkn_b }}</td>
                    <td>{{ $nilai->ppkn_c }}</td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>{{ $nilai->b_indo_a }}</td>
                    <td>{{ $nilai->b_indo_b }}</td>
                    <td>{{ $nilai->b_indo_c }}</td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>{{ $nilai->mtk_a }}</td>
                    <td>{{ $nilai->mtk_b }}</td>
                    <td>{{ $nilai->mtk_c }}</td>
                </tr>
                <tr>
                    <td>Ilmu Pengetahuan Alam</td>
                    <td>{{ $nilai->ipa_a }}</td>
                    <td>{{ $nilai->ipa_b }}</td>
                    <td>{{ $nilai->ipa_c }}</td>
                </tr>
                <tr>
                    <td>Ilmu Pengetahuan Sosial</td>
                    <td>{{ $nilai->ips_a }}</td>
                    <td>{{ $nilai->ips_b }}</td>
                    <td>{{ $nilai->ips_c }}</td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>{{ $nilai->b_inggris_a }}</td>
                    <td>{{ $nilai->b_inggris_b }}</td>
                    <td>{{ $nilai->b_inggris_c }}</td>
                </tr>
                <tr>
                    <td>Seni Budaya</td>
                    <td>{{ $nilai->seni_budaya_a }}</td>
                    <td>{{ $nilai->seni_budaya_b }}</td>
                    <td>{{ $nilai->seni_budaya_c }}</td>
                </tr>
                <tr>
                    <td>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                    <td>{{ $nilai->pjok_a }}</td>
                    <td>{{ $nilai->pjok_b }}</td>
                    <td>{{ $nilai->pjok_c }}</td>
                </tr>
                <tr>
                    <td>Prakarya</td>
                    <td>{{ $nilai->prakarya_a }}</td>
                    <td>{{ $nilai->prakarya_b }}</td>
                    <td>{{ $nilai->prakarya_c }}</td>
                </tr>
            </tbody>
        </table>
        @if (Auth::user()->role_id == 2)
            <div class="mb-3 text-center">
                <a href="/edit-nilai/{{ $nilai->id }}" class="btn btn-warning">Edit Nilai</a>
                <form action="/delete-nilai/{{ $nilai->id }}" method="POST"
                    style="display: inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        @endif

    </div>


@endsection
