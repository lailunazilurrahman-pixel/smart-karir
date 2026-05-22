<x-app-layout>

<div class="container-fluid">

    <!-- Header -->
    <div class="text-center mb-5">

        <h1 class="display-5 font-weight-bold">

            Karir Yang Cocok Untukmu 🚀

        </h1>

        <p class="text-muted">

            Berikut hasil rekomendasi karir berdasarkan
            minat dan kemampuan yang kamu miliki.

        </p>

    </div>

    <div class="row">

        @php

            $ranking = [
                1 => '🥇 Karir Paling Cocok',
                2 => '🥈 Pilihan Alternatif',
                3 => '🥉 Pilihan Cadangan'
            ];

        @endphp

        @forelse($careers as $career)

        <div class="col-lg-4">

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success">

                    <h3 class="card-title text-white">

                        {{ $ranking[$loop->iteration] ?? '✨ Karir Lainnya' }}

                        <br><br>

                        {{ $career->name }}

                    </h3>

                </div>

                <div class="card-body">

                    <!-- Persentase -->
                    <div class="mb-3">

                        <span class="badge bg-primary p-2">

                            Tingkat Kecocokan:
                            {{ round($career->match_percent ?? $career->score) }}%

                        </span>

                    </div>

                    <!-- Penjelasan -->
                    <p>

                        Kamu cocok menjadi

                        <strong>{{ $career->name }}</strong>

                        karena memiliki kemampuan di bidang

                        <strong>{{ $profile->skill }}</strong>

                        dan ketertarikan pada bidang

                        <strong>{{ $profile->interest }}</strong>.

                    </p>

                    <!-- Skill -->
                    <h5>
                        Kemampuan yang kamu miliki:
                    </h5>

                    <p class="text-muted">

                        {{ $profile->skill }}

                    </p>

                    <!-- Deskripsi -->
                    <h5>
                        Tentang Karir:
                    </h5>

                    <p class="text-muted">

                        {{ $career->description }}

                    </p>

                    <!-- Pengembangan Diri -->
                    <div class="alert alert-success mt-3">

                        <h5>
                            Saran Pengembangan Diri 🚀
                        </h5>

                        <p class="mt-2">

                            Untuk meningkatkan peluang di bidang
                            <strong>{{ $career->name }}</strong>,

                            kamu bisa mulai mengembangkan kemampuan:

                        </p>

                        <ul>

                            @foreach(explode(',', $career->skill) as $skill)

                            @php
                                $skill = trim($skill);
                            @endphp

                            @if(
                                !in_array(
                                    strtolower($skill),
                                    array_map('trim', explode(',', strtolower($profile->skill)))
                                )
                            )

                            <li>

                                {{ $skill }}

                            </li>

                            @endif

                            @endforeach

                            <li>
                                Problem Solving
                            </li>

                            <li>
                                Teamwork dan Kolaborasi
                            </li>

                            <li>
                                Konsistensi belajar dan membangun portfolio
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12">

            <div class="alert alert-warning text-center">

                <h4>

                    Belum menemukan karir yang cocok 😢

                </h4>

                <p class="mt-2">

                    Coba masukkan minat dan kemampuan lain
                    agar sistem dapat memberikan rekomendasi
                    yang lebih sesuai.

                </p>

            </div>

        </div>

        @endforelse

    </div>

</div>

</x-app-layout>