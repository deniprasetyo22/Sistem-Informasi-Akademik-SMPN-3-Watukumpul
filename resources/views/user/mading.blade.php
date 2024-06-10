@extends('layouts.main-layout')

@section('title', 'Mading')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Mading</h2>
    </div>

    <div>
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Search">
                <button class="input-group-text btn btn-primary"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>

    <div class="col-12">
        <div class="row">
            @foreach ($mading->reverse() as $data)
                <div class="col-xs-12 col-sm-4">
                    <div class="card">
                        <a class="img-card" href="/detail-mading/{{ $data->id }}">
                            <img src="{{ url('storage/foto/mading/' . $data->foto) }}">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">{{ $data->judul }}</h4>
                        </div>
                        <div class="card-read-more">
                            <a href="/detail-mading/{{ $data->id }}" class="btn btn-link btn-block">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        {{ $mading->withQueryString()->links() }}
    </div>

@endsection
