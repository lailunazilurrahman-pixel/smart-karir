<x-app-layout>

    <div class="container mt-5">

        <div class="d-flex justify-content-between mb-3">
            <h2>Data Skill</h2>

            <a href="{{ route('skills.create') }}" class="btn btn-primary">
                Tambah Skill
            </a>
        </div>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Skill</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($skills as $skill)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $skill->name }}</td>

                    <td>

                        <a href="{{ route('skills.edit', $skill->id) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('skills.destroy', $skill->id) }}"
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