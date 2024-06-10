@extends('layouts.main-layout')

@section('title', 'Berita')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Berita</h2>
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
            @foreach ($berita->reverse() as $data)
                <div class="col-xs-12 col-sm-4">
                    <div class="card">
                        <a class="img-card" href="/detail-berita/{{ $data->id }}">
                            <img src="{{ url('storage/foto/berita/' . $data->foto) }}">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">{{ $data->judul }}</h4>
                        </div>
                        <div class="card-read-more">
                            <a href="/detail-berita/{{ $data->id }}" class="btn btn-link btn-block">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div>
        {{ $berita->withQueryString()->links() }}
    </div>

@endsection
