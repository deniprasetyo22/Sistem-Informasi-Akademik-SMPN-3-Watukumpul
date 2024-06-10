<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.buble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet"> --}}


    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- css icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Styles Select2-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />




    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/admin-dashboard" class="logo d-flex align-items-center">
                <img src="{{ url('image/logo-smp.png') }}" alt="">
                <span class="d-none d-lg-block">Admin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item me-3">
                    <a href="/logout" class="btn btn-danger">Logout</a>
                </li><!-- End Button Logout-->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="/admin-dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#profil-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span>Profil</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="profil-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/admin-profilsekolah">
                            <i class="bi bi-circle"></i><span>Profil Sekolah</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-gurudankaryawan">
                            <i class="bi bi-circle"></i><span>Guru dan Karyawan</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Profil Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin-berita">
                    <i class="bi bi-newspaper"></i>
                    <span>Berita</span>
                </a>
            </li><!-- End Berita Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin-mading">
                    <i class="bi bi-newspaper"></i>
                    <span>Mading</span>
                </a>
            </li><!-- End Mading Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#ekstrakurikuler-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Ekstrakurikuler</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="ekstrakurikuler-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/admin-ekstrakurikuler-osis">
                            <i class="bi bi-circle"></i><span>OSIS</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-ekstrakurikuler-pramuka">
                            <i class="bi bi-circle"></i><span>PRAMUKA</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-ekstrakurikuler-drumband">
                            <i class="bi bi-circle"></i><span>Drumband</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-ekstrakurikuler-rebana">
                            <i class="bi bi-circle"></i><span>Rebana</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-ekstrakurikuler-tilawatilquran">
                            <i class="bi bi-circle"></i><span>Tilawatil Qur'an</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-ekstrakurikuler-pencaksilat">
                            <i class="bi bi-circle"></i><span>Pencak Silat</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-ekstrakurikuler-voli">
                            <i class="bi bi-circle"></i><span>Bola Voli</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-ekstrakurikuler-pmr">
                            <i class="bi bi-circle"></i><span>PMR</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-ekstrakurikuler-englishclub">
                            <i class="bi bi-circle"></i><span>English Club</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-ekstrakurikuler-teater">
                            <i class="bi bi-circle"></i><span>Teater</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Ekstrakurikuler Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#akademik-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-journal-text"></i><span>Akademik</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="akademik-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/admin-jadwal">
                            <i class="bi bi-circle"></i><span>Jadwal Pelajaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-materi">
                            <i class="bi bi-circle"></i><span>Materi Pelajaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-nilai">
                            <i class="bi bi-circle"></i><span>Nilai</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Akademik Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin-kontak">
                    <i class="bi bi-journal-text"></i>
                    <span>Kontak</span>
                </a>
            </li><!-- End Kontak Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin-user">
                    <i class="bi bi-people"></i>
                    <span>User</span>
                </a>
            </li><!-- End User Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>@yield('Page Title')</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin-dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="@yield('link')">@yield('back')</a></li>
                    <li class="breadcrumb-item"><a href="@yield('link2')">@yield('back2')</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer mt-auto">
        <div class="copyright">
            &copy; 2023 Copyright <strong><span>SMP Negeri 3 Watukumpul</span></strong>
        </div>
    </footer><!-- End Footer -->

    {{-- <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script> --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

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
             let form =  $(this).closest("form");
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
