<x-app-layout>

<div class="container-fluid">

    <!-- Header -->
    <div class="mb-4">

        <h1 class="h3">
            Dashboard Konselor
        </h1>

        <p class="text-muted">
            Panel Konselor Sistem Rekomendasi Karir
        </p>

    </div>

    <!-- Statistik -->
    <div class="row">

        <!-- Data User -->
        <div class="col-lg-4 col-6">

            <a href="/data-user">

                <div class="small-box bg-info">

                    <div class="inner">

                        <h3>
                            <i class="fas fa-users"></i>
                        </h3>

                        <p>Data User</p>

                    </div>

                    <div class="icon">
                        <i class="fas fa-user-friends"></i>
                    </div>

                </div>

            </a>

        </div>

        <!-- Hasil -->
        <div class="col-lg-4 col-6">

            <a href="/hasil-rekomendasi">

                <div class="small-box bg-success">

                    <div class="inner">

                        <h3>
                            <i class="fas fa-lightbulb"></i>
                        </h3>

                        <p>Hasil Rekomendasi</p>

                    </div>

                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>

                </div>

            </a>

        </div>

        <!-- Konsultasi -->
        <div class="col-lg-4 col-6">

            <a href="/konsultasi-masuk">

                <div class="small-box bg-warning">

                    <div class="inner">

                        <h3>
                            <i class="fas fa-comments"></i>
                        </h3>

                        <p>Konsultasi</p>

                    </div>

                    <div class="icon">
                        <i class="fas fa-headset"></i>
                    </div>

                </div>

            </a>

        </div>

    </div>

    <!-- Welcome -->
    <div class="card shadow-sm">

        <div class="card-header">

            <h3 class="card-title">
                Welcome Konselor
            </h3>

        </div>

        <div class="card-body">

            <h5>
                Halo Konselor 👋
            </h5>

            <p>
                Bantu user mendapatkan rekomendasi karir terbaik melalui konsultasi dan analisis minat serta skill.
            </p>

        </div>

    </div>

    <!-- Konsultasi Terbaru -->
    <div class="card shadow-sm mt-4">

        <div class="card-header bg-primary text-white">

            <h4>

                Konsultasi Terbaru 📩

            </h4>

        </div>

        <div class="card-body">

            @forelse($consultations as $consultation)

            <div class="border rounded p-3 mb-3">

                <h5>

                    {{ $consultation->user->name }}

                </h5>

                <p>

                    {{ $consultation->message }}

                </p>

                @if($consultation->status == 'Menunggu')

                <span class="badge bg-warning">

                    {{ $consultation->status }}

                </span>

                @elseif($consultation->status == 'Dibalas')

                <span class="badge bg-success">

                    {{ $consultation->status }}

                </span>

                @else

                <span class="badge bg-secondary">

                    {{ $consultation->status }}

                </span>

                @endif

                <br><br>

                <a
                    href="/konsultasi-masuk"
                    class="btn btn-primary btn-sm">

                    Lihat & Balas

                </a>

            </div>

            @empty

            <div class="alert alert-warning">

                Belum ada konsultasi masuk

            </div>

            @endforelse

        </div>

    </div>

</div>

</x-app-layout>