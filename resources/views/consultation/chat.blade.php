<x-app-layout>

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm">

                <div class="card-header bg-primary text-white">

                    <h4>

                        Room Konsultasi 💬

                    </h4>

                </div>

                <div class="card-body">

                    @if(session('success'))

                    <div class="alert alert-success">

                        {{ session('success') }}

                    </div>

                    @endif

                    <!-- Status -->
                    <div class="mb-3">

                        @if($consultation->status == 'Menunggu')

                        <span class="badge bg-warning">

                            {{ $consultation->status }}

                        </span>

                        @elseif($consultation->status == 'Dibalas')

                        <span class="badge bg-success">

                            {{ $consultation->status }}

                        </span>

                        @elseif($consultation->status == 'Selesai')

                        <span class="badge bg-secondary">

                            {{ $consultation->status }}

                        </span>

                        @endif

                    </div>

                    <!-- Tombol selesai -->
                    @if($consultation->status != 'Selesai')

                    <form
                        action="/consultation-finish/{{ $consultation->id }}"
                        method="POST"
                        class="mb-3">

                        @csrf

                        <button class="btn btn-success btn-sm">

                            Selesaikan Konsultasi ✅

                        </button>

                    </form>

                    @else

                    <div class="alert alert-secondary">

                        Konsultasi telah selesai 🔒

                    </div>

                    @endif

                    <!-- Chat Area -->
                    <div
                        id="chatArea"
                        class="border rounded p-3 mb-3"
                        style="
                            height:400px;
                            overflow-y:auto;
                            background:#f8f9fa;
                        ">

                        @foreach($consultation->messages as $chat)

                        <div class="mb-3">

                            @if($chat->user_id == auth()->id())

                            <!-- Pesan sendiri -->

                            <div class="text-end">

                                <div
                                    class="d-inline-block bg-primary text-white p-3 rounded shadow-sm">

                                    <strong>

                                        Kamu

                                    </strong>

                                    <br>

                                    {{ $chat->message }}

                                    <br>

                                    <small class="text-light">

                                        {{ $chat->created_at->format('d M Y • H:i') }}

                                    </small>

                                </div>

                            </div>

                            @else

                            <!-- Pesan lawan chat -->

                            <div class="text-start">

                                <div
                                    class="d-inline-block bg-white border p-3 rounded shadow-sm">

                                    <strong>

                                        {{ $chat->user->name }}

                                    </strong>

                                    <br>

                                    {{ $chat->message }}

                                    <br>

                                    <small class="text-muted">

                                        {{ $chat->created_at->format('d M Y • H:i') }}

                                    </small>

                                </div>

                            </div>

                            @endif

                        </div>

                        @endforeach

                    </div>

                    <!-- Form Kirim -->
                    @if($consultation->status != 'Selesai')

                    <form
                        action="/consultation-chat/{{ $consultation->id }}"
                        method="POST">

                        @csrf

                        <div class="input-group">

                            <input
                                type="text"
                                name="message"
                                class="form-control"
                                placeholder="Tulis pesan..."
                                required>

                            <button class="btn btn-primary">

                                Kirim

                            </button>

                        </div>

                    </form>

                    @endif

                </div>

            </div>

        </div>

    </div>

</div>

<script>

    let chatArea = document.getElementById('chatArea');

    chatArea.scrollTop = chatArea.scrollHeight;

</script>

</x-app-layout>