@extends('layouts.admin-layout')

@section('title', 'Admin | Add Jadwal')

@section('Page Title', 'Tambah Data Jadwal')

@section('link', '/admin-jadwal')

@section('back', 'Jadwal Pelajaran')

@section('content')

    <div class="mt-5 m-auto">
        <form action="/admin-jadwal" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas" class="form-select" required>
                    <option value="">--Pilih Kelas--</option>
                    <option value="7A">7A</option>
                    <option value="7B">7B</option>
                    <option value="7C">7C</option>
                    <option value="7D">7D</option>
                    <option value="7E">7E</option>
                    <option value="8A">8A</option>
                    <option value="8B">8B</option>
                    <option value="8C">8C</option>
                    <option value="8D">8D</option>
                    <option value="8E">8E</option>
                    <option value="9A">9A</option>
                    <option value="9B">9B</option>
                    <option value="9C">9C</option>
                    <option value="9D">9D</option>
                    <option value="9E">9E</option>
                </select>
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
                            <td>
                                <input type="time" class="form-control" name="jam1">
                            </td>
                            <td>
                                <select name="senin1" id="senin1" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa1" id="selasa1" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu1" id="rabu1" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis1" id="kamis1" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat1" id="jumat1" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu1" id="sabtu1" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <input type="time" class="form-control" name="jam2">
                            </td>
                            <td>
                                <select name="senin2" id="senin2" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa2" id="selasa2" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu2" id="rabu2" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis2" id="kamis2" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat2" id="jumat2" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu2" id="sabtu2" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <input type="time" class="form-control" name="jam3">
                            </td>
                            <td>
                                <select name="senin3" id="senin3" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa3" id="selasa3" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu3" id="rabu3" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis3" id="kamis3" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat3" id="jumat3" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu3" id="sabtu3" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <input type="time" class="form-control" name="jam4">
                            </td>
                            <td>
                                <select name="senin4" id="senin4" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa4" id="selasa4" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu4" id="rabu4" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis4" id="kamis4" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat4" id="jumat4" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu4" id="sabtu4" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <input type="time" class="form-control" name="jam5">
                            </td>
                            <td>
                                <select name="senin5" id="senin5" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa5" id="selasa5" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu5" id="rabu5" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis5" id="kamis5" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat5" id="jumat5" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu5" id="sabtu5" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <input type="time" class="form-control" name="jam6">
                            </td>
                            <td>
                                <select name="senin6" id="senin6" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa6" id="selasa6" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu6" id="rabu6" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis6" id="kamis6" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat6" id="jumat6" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu6" id="sabtu6" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <input type="time" class="form-control" name="jam7">
                            </td>
                            <td>
                                <select name="senin7" id="senin7" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa7" id="selasa7" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu7" id="rabu7" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis7" id="kamis7" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat7" id="jumat7" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu7" id="sabtu7" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <input type="time" class="form-control" name="jam8">
                            </td>
                            <td>
                                <select name="senin8" id="senin8" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa8" id="selasa8" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu8" id="rabu8" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis8" id="kamis8" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat8" id="jumat8" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu8" id="sabtu8" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                <input type="time" class="form-control" name="jam9">
                            </td>
                            <td>
                                <select name="senin9" id="senin9" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa9" id="selasa9" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu9" id="rabu9" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis9" id="kamis9" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat9" id="jumat9" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu9" id="sabtu9" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                <input type="time" class="form-control" name="jam10">
                            </td>
                            <td>
                                <select name="senin10" id="senin10" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="selasa10" id="selasa10" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="rabu10" id="rabu10" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="kamis10" id="kamis10" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="jumat10" id="jumat10" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                            <td>
                                <select name="sabtu10" id="sabtu10" class="form-select">
                                    <option value="">--Pilih--</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="PABP">PABP</option>
                                    <option value="PPKn">PPKn</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="PJOK">PJOK</option>
                                    <option value="Prakarya">Prakarya</option>
                                    <option value="Istirahat">Istirahat</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
