<x-app-layout>

<div class="container mt-5">

    <h2 class="mb-4">Tambah Minat</h2>

    <form action="{{ route('interests.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>Nama Minat</label>

            <input type="text"
                name="name"
                class="form-control">

        </div>

        <button class="btn btn-primary">
            Simpan
        </button>

    </form>

</div>

</x-app-layout>