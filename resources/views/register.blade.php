@extends('layouts.main-layout')

@section('title', 'Register')

@section('content')

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 col-lg-6">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
                    alt="Sample image">
            </div>
            <div class="col-xl-4 offset-xl-1">
                <div class="card p-3">
                    <form action="/register" method="POST">
                        @csrf
                        <h3 class="card-tittle text-center mb-4">Register</h3>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        {{-- Name Input --}}
                        <div class="form-outline mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" class="form-control form-control-lg"
                                placeholder="Enter name" autocomplete="off">
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" autocomplete="off">
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" />
                        </div>

                        <div class="text-center mt-4 pt-2">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already an account? <a href="/login"
                                    class="link-danger">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
