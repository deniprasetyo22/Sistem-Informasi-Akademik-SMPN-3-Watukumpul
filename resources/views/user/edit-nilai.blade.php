@extends('layouts.main-layout')

@section('title', 'Edit Nilai')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Edit Nilai</h2>
    </div>

    <div class="col-8 m-auto">
        <form action="/nilai/{{ $nilai->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama"
                    value="{{ $nilai->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                    <option selected>{{ $nilai->jenis_kelamin }}</option>
                    <option value="">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nisn">NISN</label>
                <input type="number" step="any" class="form-control" name="nisn" id="nisn"
                    placeholder="Masukan NISN" value="{{ $nilai->nisn }}" required>
            </div>
            <div class="mb-3">
                <label for="semester">Semester</label>
                <select class="form-select" name="semester" id="semester" required>
                    <option selected>{{ $nilai->semester }}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pabp">Pendidikan Agama dan Budi Pekerti</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="pabp_a" id="pabp_a"
                            placeholder="Niai Pengetahuan" value="{{ $nilai->pabp_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="pabp_b" id="pabp_b"
                            placeholder="Nilai Keterampilan" value="{{ $nilai->pabp_b }}">
                    </div>
                    <div class="col-4">
                        <select name="pabp_c" id="pabp_c" class="form-select">
                            <option selected>{{ $nilai->pabp_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="ppkn">Pendidikan Pancasila dan Kewarganegaraan</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="ppkn_a" id="ppkn_a"
                            placeholder="Niai Pengetahuan" value="{{ $nilai->ppkn_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="ppkn_b" id="ppkn_b"
                            placeholder="Nilai Keterampilan" value="{{ $nilai->ppkn_b }}">
                    </div>
                    <div class="col-4">
                        <select name="ppkn_c" id="ppkn_c" class="form-select">
                            <option selected>{{ $nilai->ppkn_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="b_indo">Bahasa Indonesia</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="b_indo_a" id="b_indo_a"
                            placeholder="Niai Pengetahuan" value="{{ $nilai->b_indo_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="b_indo_b" id="b_indo_b"
                            placeholder="Nilai Keterampilan" value="{{ $nilai->b_indo_b }}">
                    </div>
                    <div class="col-4">
                        <select name="b_indo_c" id="b_indo_c" class="form-select">
                            <option selected>{{ $nilai->b_indo_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="mtk">Matematika</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="mtk_a" id="mtk_a"
                            placeholder="Niai Pengetahuan" value="{{ $nilai->mtk_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="mtk_b" id="mtk_b"
                            placeholder="Nilai Keterampilan" value="{{ $nilai->mtk_b }}">
                    </div>
                    <div class="col-4">
                        <select name="mtk_c" id="mtk_c" class="form-select">
                            <option selected>{{ $nilai->mtk_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="ipa">Ilmu Pengetahuan Alam</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="ipa_a" id="ipa_a"
                            placeholder="Niai Pengetahuan" value="{{ $nilai->ipa_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="ipa_b" id="ipa_b"
                            placeholder="Nilai Keterampilan" value="{{ $nilai->ipa_b }}">
                    </div>
                    <div class="col-4">
                        <select name="ipa_c" id="ipa_c" class="form-select">
                            <option selected>{{ $nilai->ipa_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="ips">Ilmu Pengetahuan Sosial</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="ips_a" id="ips_a"
                            placeholder="Niai Pengetahuan" value="{{ $nilai->ips_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="ips_b" id="ips_b"
                            placeholder="Nilai Keterampilan" value="{{ $nilai->ips_b }}">
                    </div>
                    <div class="col-4">
                        <select name="ips_c" id="ips_c" class="form-select">
                            <option selected>{{ $nilai->ips_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="b_inggris">Bahasa Inggris</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="b_inggris_a" id="b_inggris_a"
                            placeholder="Niai Pengetahuan" value="{{ $nilai->b_inggris_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="b_inggris_b" id="b_inggris_b"
                            placeholder="Nilai Keterampilan" value="{{ $nilai->b_inggris_b }}">
                    </div>
                    <div class="col-4">
                        <select name="b_inggris_c" id="b_inggris_c" class="form-select">
                            <option selected>{{ $nilai->b_inggris_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="seni_budaya">Seni Budaya</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="seni_budaya_a"
                            id="seni_budaya_a" placeholder="Niai Pengetahuan" value="{{ $nilai->seni_budaya_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="seni_budaya_b"
                            id="seni_budaya_b" placeholder="Nilai Keterampilan" value="{{ $nilai->seni_budaya_b }}">
                    </div>
                    <div class="col-4">
                        <select name="seni_budaya_c" id="seni_budaya_c" class="form-select">
                            <option selected>{{ $nilai->seni_budaya_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="pjok">Pendidikan Jasmani, Olahraga, dan Kesehatan</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="pjok_a" id="pjok_a"
                            placeholder="Niai Pengetahuan" value="{{ $nilai->pjok_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="pjok_b" id="pjok_b"
                            placeholder="Nilai Keterampilan" value="{{ $nilai->pjok_b }}">
                    </div>
                    <div class="col-4">
                        <select name="pjok_c" id="pjok_c" class="form-select">
                            <option selected>{{ $nilai->pjok_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="prakarya">Prakarya</label>
                <div class="row">
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="prakarya_a" id="prakarya_a"
                            placeholder="Niai Pengetahuan" value="{{ $nilai->prakarya_a }}">
                    </div>
                    <div class="col-4">
                        <input type="number" step="any" class="form-control" name="prakarya_b" id="prakarya_b"
                            placeholder="Nilai Keterampilan" value="{{ $nilai->prakarya_b }}">
                    </div>
                    <div class="col-4">
                        <select name="prakarya_c" id="prakarya_c" class="form-select">
                            <option selected>{{ $nilai->prakarya_c }}</option>
                            <option value="SB">SB</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="K">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection
