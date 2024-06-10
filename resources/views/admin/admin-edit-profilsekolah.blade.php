@extends('layouts.admin-layout')

@section('title', 'Admin | Edit Profil Sekolah')

@section('Page Title', 'Edit Profil Sekolah')

@section('link', '/admin-profilsekolah')

@section('back', 'Profil Sekolah')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/admin-profilsekolah/{{ $profil->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="namasekolah">Nama Sekolah</label>
                <input type="text" class="form-control" name="namasekolah" id="namasekolah" value="{{ $profil->namasekolah }}" required>
            </div>
            <div class="mb-3">
                <label for="npsp">NPSN</label>
                <input type="text" class="form-control" name="npsp" id="npsp" value="{{ $profil->npsn }}" required>
            </div>
            <div class="mb-3">
                <label for="statussekolah">Status Sekolah</label>
                <input type="text" class="form-control" name="statussekolah" id="statussekolah" value="{{ $profil->statussekolah }}" required>
            </div>
            <div class="mb-3">
                <label for="bentuksekolah">Bentuk Sekolah</label>
                <input type="text" class="form-control" name="bentuksekolah" id="bentuksekolah" value="{{ $profil->bentuksekolah }}" required>
            </div>
            <div class="mb-3">
                <label for="statuskepemilikan">Status Kepemilikan</label>
                <input type="text" class="form-control" name="statuskepemilikan" id="statuskepemilikan" value="{{ $profil->statuskepemilikan }}" required>
            </div>
            <div class="mb-3">
                <label for="akreditasi">Akreditasi</label>
                <input type="text" class="form-control" name="akreditasi" id="akreditasi" value="{{ $profil->akreditasi }}" required>
            </div>
            <div class="mb-3">
                <label for="kurikulum">Kurikumlum</label>
                <input type="text" class="form-control" name="kurikulum" id="kurikulum" value="{{ $profil->kurikulum }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="jumlahguru">Jumlah Guru</label>
                <input type="text" class="form-control" name="jumlahguru" id="jumlahguru" value="{{ $profil->jumlahguru }}" required>
            </div>
            <div class="mb-3">
                <label for="jumlahsiswa">Jumlah Siswa</label>
                <input type="text" class="form-control" name="jumlahsiswa" id="jumlahsiswa" value="{{ $profil->jumlahsiswa }}" required>
            </div>
            <div class="mb-3">
                <label for="visi">Visi</label>
                <textarea class="form-control" name="visi" id="" rows="5" required>{{ $profil->visi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="misi">Misi</label>
                <textarea class="form-control" name="misi" id="" rows="5" required>{{ $profil->misi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Struktur Organisasi</label>
                <input class="form-control" type="file" id="struktur" name="struktur">
                <div class="text-center">
                    <img src="{{ url('storage/foto/struktur/' . $profil->struktur) }}" alt="" width="300px">
                </div>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
