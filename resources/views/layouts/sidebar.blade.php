<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - PruLeads</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">



    <!-- Vendor CSS Files -->
    <link type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }} " rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/remixicon/remixicon.css') }} " rel="stylesheet">
    {{--    <link type="text/css" href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    {{-- paginationn links --}}
    <!-- Include DataTables CSS and JS -->
    {{--    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}

    <style>
        nav.pagination {
            margin: 20px 0;
            text-align: center;
        }

        nav.pagination ul {
            list-style: none;
            padding: 0;
        }

        nav.pagination ul li {
            display: inline-block;
            margin: 0 5px;
        }

        nav.pagination ul li a,
        nav.pagination ul li span {
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f5f5f5;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
        }

        nav.pagination ul li.active span {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }

        nav.pagination ul li.disabled span,
        nav.pagination ul li.disabled a {
            color: #ccc;
            pointer-events: none;
            cursor: not-allowed;
        }

        nav.pagination ul li a:hover {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }







        /* CSS for the navigation menu */
        .nav-container-menu {
            display: flex;
            justify-content: center;
        }

        .nav-list-menu {
            list-style-type: none;
            padding: 0;
            display: flex;
        }

        .nav-item-menu {
            margin: 0 10px;
        }

        .nav-link-menu {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 18px;
            border: 2px solid #333;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">PruLeads Admin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        {{-- include nav bar here --}}
        @include('layouts.appbar')

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard') }}    ">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Agents</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('uploadAgentList') }}">
                            <i class="bi bi-circle"></i><span>Upload Agent list</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agentList') }}">
                            <i class="bi bi-circle"></i><span>View Agent list</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('searchAgentPage') }}">
                            <i class="bi bi-circle"></i><span>Search Agent</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">
                            <i class="bi bi-circle"></i><span>Form Layouts</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Forms Nav --> --}}

            <li class="nav-heading">Pages</li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-blank.html">
                    <i class="bi bi-file-earmark"></i>
                    <span>Blank</span>
                </a>
            </li><!-- End Blank Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        {{-- content in other pages --}}
        @yield('content')

    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Prudential</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }} "></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('vendor/chart.js/chart.umd.js') }} "></script>
    <script src="{{ asset('vendor/echarts/echarts.min.js') }} "></script>
    <script src="{{ asset('vendor/quill/quill.min.js') }} "></script>
    <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }} "></script>
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }} "></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }} "></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>


    <script async src='https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP'></script>
    <script>
        if (window.self == window.top) {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-P7JSYB1CSP');
        }
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"80c650a02b5d4929","token":"68c5ca450bae485a842ff76066d69420","version":"2023.8.0","si":100}'
        crossorigin="anonymous"></script>
    <!-- Include jQuery and DataTables here if not already included -->
    @yield('scripts')

</body>

</html>
