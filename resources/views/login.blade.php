@extends('layouts.main-layout')

@section('title', 'Login')

@section('content')

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 col-lg-6">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
                    alt="Sample image">
            </div>
            <div class="col-xl-4 offset-xl-1">
                @if (Session::has('status'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                @if (Session::has('register'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="card p-3 mt-5">
                    <form method="POST" action="">
                        @csrf
                        <h3 class="card-tittle text-center mb-4">Login</h3>
                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" autocomplete="off" required>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" required>
                        </div>

                        <div class="text-center mt-4 pt-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                            {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                                    class="link-danger">Register</a></p> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
