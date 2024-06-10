@extends('layouts.admin-layout')

@section('title', 'Admin | Kontak')

@section('Page Title', 'Kontak')

@section('content')
    @foreach ($kontak as $data)
        <a class="btn btn-warning mb-3" href="/admin-edit-kontak/{{ $data->id }}">Edit</a>
    @endforeach

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Telepon</th>
                <th>WhatsApp</th>
                <th>Email</th>
                <th>Instagram</th>
                <th>Alamat</th>
            </tr>
        </thead>
        @foreach ($kontak as $data)
            <tbody>
                <tr>
                    <td>{{ $data->telepon }}</td>
                    <td>{{ $data->whatsapp }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->instagram }}</td>
                    <td>{{ $data->alamat }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>

@endsection
