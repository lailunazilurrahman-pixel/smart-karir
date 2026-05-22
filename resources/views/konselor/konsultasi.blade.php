<x-app-layout>

<div class="container-fluid">

    <h1 class="mb-4">

        Konsultasi Masuk 📩

    </h1>

    <div class="card shadow-sm">

        <div class="card-body">

            @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

            @endif

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>Nama User</th>

                        <th>Pesan Konsultasi</th>

                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($consultations as $consultation)

                    <tr>

                        <td>

                            {{ $consultation->user->name }}

                        </td>

                        <td>

                            <strong>Pertanyaan:</strong>

                            <br>

                            {{ $consultation->message }}

                        </td>

                        <td>

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

                        </td>

                        <td>

                            <a
                                href="/consultation-chat/{{ $consultation->id }}"
                                class="btn btn-primary btn-sm">

                                Buka Room Chat 💬

                            </a>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="4" class="text-center">

                            Belum ada konsultasi masuk

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>