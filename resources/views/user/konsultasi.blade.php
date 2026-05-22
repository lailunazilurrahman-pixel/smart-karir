<x-app-layout>

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm">

                <div class="card-header bg-primary text-white">

                    <h3>

                        Konsultasi Karir 🎓

                    </h3>

                </div>

                <div class="card-body">

                    @if(session('success'))

                    <div class="alert alert-success">

                        {{ session('success') }}

                    </div>

                    @endif

                    <form action="/konsultasi" method="POST">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">

                                Ceritakan masalah atau pertanyaan karirmu

                            </label>

                            <textarea
                                name="message"
                                rows="6"
                                class="form-control"
                                placeholder="Contoh: Saya bingung menentukan karir yang cocok..."
                                required></textarea>

                        </div>

                        <button class="btn btn-primary">

                            Kirim Konsultasi

                        </button>

                    </form>

                    <hr>

                    <h4 class="mt-4">

                        Riwayat Konsultasi 📚

                    </h4>

                    @foreach(
                        \App\Models\Consultation::where('user_id', auth()->id())->latest()->get()
                        as $consultation
                    )

                    <div class="card mt-3 shadow-sm">

                        <div class="card-body">

                            <p>

                                <strong>Pertanyaan:</strong>

                                <br>

                                {{ $consultation->message }}

                            </p>

                            <p>

                                <strong>Status:</strong>

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

                            </p>

                            <!-- Tombol buka room chat -->
                            <a
                                href="/consultation-chat/{{ $consultation->id }}"
                                class="btn btn-primary btn-sm">

                                Buka Chat Konsultasi 💬

                            </a>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</div>

</x-app-layout>