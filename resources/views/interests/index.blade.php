<x-app-layout>

    <div class="container mt-5">

        <div class="d-flex justify-content-between mb-3">
            <h2>Data Minat</h2>

            <a href="{{ route('interests.create') }}" class="btn btn-primary">
                Tambah Minat
            </a>
        </div>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Minat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($interests as $interest)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $interest->name }}</td>

                    <td>

                        <a href="{{ route('interests.edit', $interest->id) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('interests.destroy', $interest->id) }}"
                            method="POST"
                            class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="btn btn-danger btn-sm">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</x-app-layout>