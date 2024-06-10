@extends('layouts.main-layout')

@section('title', 'Beranda')

@section('content')

    {{-- <div class="text-center" id="top">
        <img src="{{url('image/front.png')}}" alt="" class="img-fluid">
    </div> --}}

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Selamat Datang</h1>
                    <h2>di SMP Negeri 3 Watukumpul</h2>
                    @if (Auth::user())
                    @else
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="/login" class="btn-get-started scrollto">Login</a>
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ url('image/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

@endsection
