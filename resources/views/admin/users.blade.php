<x-app-layout>

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Data User
            </h3>

        </div>

        <div class="card-body">

            @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

            @endif

            @if(session('error'))

            <div class="alert alert-danger">

                {{ session('error') }}

            </div>

            @endif

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Nama</th>

                        <th>Email</th>

                        <th>Role</th>

                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $user)

                    <tr>

                        <td>

                            {{ $loop->iteration }}

                        </td>

                        <td>

                            {{ $user->name }}

                        </td>

                        <td>

                            {{ $user->email }}

                        </td>

                        <td>

                            <span class="badge bg-primary">

                                {{ $user->role }}

                            </span>

                        </td>

                        <td>

                            <form
                                action="/delete-user/{{ $user->id }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus user ini?')">

                                @csrf

                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>