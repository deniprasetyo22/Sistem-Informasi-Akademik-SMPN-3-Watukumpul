@extends('layouts.admin-layout')

@section('title', 'Admin | Ekstrakurikuler')

@section('Page Title', 'Ekstrakurikuler')

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ekstrakurikuler</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>OSIS</td>
                    <td><a href="/admin-ekstrakurikuler-osis" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PRAMUKA</td>
                    <td><a href="/admin-ekstrakurikuler-pramuka" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Drum Band</td>
                    <td><a href="/admin-ekstrakurikuler-drumband" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Rebana</td>
                    <td><a href="/admin-ekstrakurikuler-rebana" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Tilawatil Qur'an</td>
                    <td><a href="/admin-ekstrakurikuler-tilawatilquran" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Pencak Silat</td>
                    <td><a href="/admin-ekstrakurikuler-pencaksilat" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Bola Voli</td>
                    <td><a href="/admin-ekstrakurikuler-voli" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>PMR</td>
                    <td><a href="/admin-ekstrakurikuler-pmr" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>English Club</td>
                    <td><a href="/admin-ekstrakurikuler-englishclub" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Teater</td>
                    <td><a href="/admin-ekstrakurikuler-teater" class="btn btn-success">Detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
