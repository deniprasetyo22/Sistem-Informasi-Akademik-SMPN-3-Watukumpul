@extends('layouts.main-layout')

@section('title', 'Kontak')

@section('content')

    <div class="text-center">
        <h2 class="mb-3">Kontak</h2>
    </div>

    @foreach ($kontak as $data)
        <div id="container1" class="container1">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat :</h4>
                                <p>{{ $data->alamat }}</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email :</h4>
                                <a href="mailto: smpn3watukumpul@gmail.com">
                                    <p>{{ $data->email }}</p>
                                </a>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon :</h4>
                                <p>{{ $data->telepon }}</p>
                            </div>

                            <div class="whatsapp">
                                <i class="bi bi-whatsapp"></i>
                                <h4>WhatsApp :</h4>
                                <a href="https://wa.me/6285601907574">
                                    <p>{{ $data->telepon }}</p>
                                </a>
                            </div>

                            <div class="instagram">
                                <i class="bi bi-instagram"></i>
                                <h4>Instagram :</h4>
                                <a href="https://www.instagram.com/ceritaspentiwa/">
                                    <p>{{ $data->instagram }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="info">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4646.591998006792!2d109.4841223090607!3d-7.193363420152724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ffcbac62e0b0b%3A0x7ed11da766408736!2sSMP%20Negeri%203%20Watukumpul!5e0!3m2!1sid!2sid!4v1684975828402!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 350px;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
