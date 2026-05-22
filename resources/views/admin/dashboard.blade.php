<x-app-layout>

<div class="container-fluid">

    <!-- Header -->
    <div class="mb-4">

        <h1 class="h3">
            Dashboard Admin
        </h1>

        <p class="text-muted">
            Selamat datang di Sistem Rekomendasi Karir
        </p>

    </div>

    <!-- Statistik -->
    <div class="row">

        <!-- User -->
        <div class="col-lg-3 col-6">

            <a href="/data-user">

                <div class="small-box bg-info">

                    <div class="inner">

                        <h3>{{ $totalUser }}</h3>

                        <p>Total User</p>

                    </div>

                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>

                </div>

            </a>

        </div>

        <!-- Karir -->
        <div class="col-lg-3 col-6">

            <a href="/careers">

                <div class="small-box bg-success">

                    <div class="inner">

                        <h3>{{ $totalKarir }}</h3>

                        <p>Data Karir</p>

                    </div>

                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>

                </div>

            </a>

        </div>

        <!-- Minat -->
        <div class="col-lg-3 col-6">

            <a href="/interests">

                <div class="small-box bg-warning">

                    <div class="inner">

                        <h3>{{ $totalMinat }}</h3>

                        <p>Minat</p>

                    </div>

                    <div class="icon">
                        <i class="fas fa-heart"></i>
                    </div>

                </div>

            </a>

        </div>

        <!-- Skill -->
        <div class="col-lg-3 col-6">

            <a href="/skills">

                <div class="small-box bg-danger">

                    <div class="inner">

                        <h3>{{ $totalSkill }}</h3>

                        <p>Skill</p>

                    </div>

                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>

                </div>

            </a>

        </div>

    </div>

    <!-- Content -->
    <div class="row">

        <!-- Welcome -->
        <div class="col-lg-12">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">
                        Welcome Admin
                    </h3>

                </div>

                <div class="card-body">

                    <h5>
                        Halo Admin 👋
                    </h5>

                    <p>
                        Kelola data karir, minat, skill, dan rekomendasi user dengan mudah melalui dashboard ini.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

</x-app-layout>