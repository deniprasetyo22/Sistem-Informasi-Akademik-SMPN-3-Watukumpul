<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{-- css icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Styles Select2-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg fixed-top bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/beranda">
                <img src="{{ url('image/logo-smp.png') }}" alt="" width="25px">
                SMP NEGERI 3 WATUKUMPUL
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mading">Mading</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ekstrakurikuler">Ekstrakurikuler</a>
                    </li class="nav-item">
                    @if (Auth::user())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                href="#">Akademik</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/jadwal">Jadwal Pelajaran</a></li>
                                <li><a class="dropdown-item" href="/materi">Materi Pelajaran</a></li>
                                <li><a class="dropdown-item" href="/nilai">Nilai</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">Kontak</a>
                    </li>
                    <li class="nav-item d-grid">
                        @if (Auth::user())
                            <a href="/logout" class="btn btn-danger ms-3" id="logout">Logout</a>
                        @else
                            <a class="btn btn-light ms-3" href="/login" id="login">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer mt-auto">
        <div class="copyright">
            &copy; 2023 Copyright <strong><span>SMP Negeri 3 Watukumpul</span></strong>
        </div>
    </footer><!-- End Footer -->

    {{-- bootsrtap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <!-- Scripts Select2-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.confirm-delete').click(function(event) {
            let form = $(this).closest("form");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script> --}}

    <script>
        $('#single-select-field1').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
        $('#single-select-field2').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    </script>

    @include('sweetalert::alert')

</body>

</html>
