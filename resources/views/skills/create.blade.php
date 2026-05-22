<x-app-layout>

<div class="container mt-5">

    <h2 class="mb-4">Tambah Skill</h2>

    <form action="{{ route('skills.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>Nama Skill</label>

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