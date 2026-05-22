<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Rekomendasi Karir</title>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">

        <ul class="navbar-nav">

            <li class="nav-item">

                <a class="nav-link" data-widget="pushmenu" href="#">

                    <i class="fas fa-bars"></i>

                </a>

            </li>

        </ul>

    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="/dashboard" class="brand-link">

            <span class="brand-text font-weight-light">
                Sistem Karir
            </span>

        </a>

        <div class="sidebar">

            <nav class="mt-2">

                <ul class="nav nav-pills nav-sidebar flex-column">

                    {{-- ADMIN --}}
                    @if(Auth::user()->role == 'admin')

                        <li class="nav-item">
                            <a href="/admin" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/careers" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>Karir</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/interests" class="nav-link">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>Minat</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/skills" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>Skill</p>
                            </a>
                        </li>

                    @endif


                    {{-- USER --}}
                    @if(Auth::user()->role == 'user')

                        <li class="nav-item">
                            <a href="/user" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/profile-user" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Input Data</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/recommendation" class="nav-link">
                                <i class="nav-icon fas fa-lightbulb"></i>
                                <p>Rekomendasi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/konsultasi" class="nav-link">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>Chat Konselor</p>
                            </a>
                        </li>

                    @endif


                    {{-- KONSELOR --}}
                    @if(Auth::user()->role == 'konselor')

                        <li class="nav-item">
                            <a href="/konselor" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/data-user" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data User</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/hasil-rekomendasi" class="nav-link">
                                <i class="nav-icon fas fa-lightbulb"></i>
                                <p>Hasil Rekomendasi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/konsultasi" class="nav-link">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>Konsultasi</p>
                            </a>
                        </li>

                    @endif


                    {{-- LOGOUT --}}
                    <li class="nav-item">

                        <a href="/keluar" class="nav-link">

                            <i class="nav-icon fas fa-sign-out-alt"></i>

                            <p>Logout</p>

                        </a>

                    </li>

                </ul>

            </nav>

        </div>

    </aside>

    <!-- Content -->
    <div class="content-wrapper p-3">

        {{ $slot }}

    </div>

</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>