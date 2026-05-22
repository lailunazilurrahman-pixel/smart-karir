<x-app-layout>

    <div class="container mt-5">

        <div class="d-flex justify-content-between mb-3">
            <h2>Data Karir</h2>

            <a href="{{ route('careers.create') }}" class="btn btn-primary">
                Tambah Karir
            </a>
        </div>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Karir</th>
                    <th>Deskripsi</th>
                    <th>Skill</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($careers as $career)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $career->name }}</td>
                    <td>{{ $career->description }}</td>
                    <td>{{ $career->skill }}</td>

                    <td>

                        <a href="{{ route('careers.edit', $career->id) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('careers.destroy', $career->id) }}"
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