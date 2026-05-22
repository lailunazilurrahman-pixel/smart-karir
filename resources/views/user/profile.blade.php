<x-app-layout>

<div class="container-fluid">

    <!-- Header -->
    <div class="text-center mb-5">

        <h1 class="display-5 font-weight-bold">

            Kenali Potensimu 🚀

        </h1>

        <p class="text-muted">

            Ceritakan minat dan kemampuan yang kamu miliki
            agar sistem dapat membantu menemukan
            arah karir terbaik untukmu.

        </p>

    </div>

    <div class="card shadow-sm">

        <div class="card-body">

            <form action="/profile-user" method="POST">

                @csrf

                <!-- Minat -->
                <div class="mb-4">

                    <label class="form-label">

                        Bidang yang kamu minati

                    </label>

                    <input
                        type="text"
                        name="interest"
                        class="form-control"
                        placeholder="Contoh: Teknologi, Bisnis, Hukum">

                    <small class="text-muted">

                        Contoh: Teknologi, Pendidikan, Bisnis, Hukum, Kesehatan

                    </small>

                </div>

                <!-- Skill -->
                <div class="mb-4">

                    <label class="form-label">

                        Kemampuan yang kamu miliki

                    </label>

                    <textarea
                        name="skill"
                        class="form-control"
                        rows="4"
                        placeholder="Contoh: Komunikasi, Jualan, Leadership, Ngoding"></textarea>

                    <small class="text-muted">

                        Pisahkan kemampuan dengan tanda koma (,)

                    </small>

                </div>

                <button class="btn btn-primary">

                    Lihat Rekomendasi Karir

                </button>

            </form>

        </div>

    </div>

</div>

</x-app-layout>