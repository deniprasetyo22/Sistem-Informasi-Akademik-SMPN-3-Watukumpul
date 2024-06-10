@extends('layouts.main-layout')

@section('title', 'Ekstrakurikuler PMR')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Ekstrakurikuler PMR</h2>
    </div>

    <div class="row">
        @foreach ($pmr->reverse() as $data)
            <div class="col-md-3 mb-3 d-flex justify-content-center">
                <div class="card text-center">
                    <img src="{{ url('storage/foto/ekstrakurikuler/' . $data->foto) }}" width="100%" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $data->deskripsi }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
