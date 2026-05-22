<x-app-layout>

<div class="container mt-5">

    <h2 class="mb-4">Edit Karir</h2>

    <form action="{{ route('careers.update', $career->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Karir</label>

            <input type="text"
                name="name"
                value="{{ $career->name }}"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>

            <textarea name="description"
                class="form-control">{{ $career->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Skill</label>

            <input type="text"
                name="skill"
                value="{{ $career->skill }}"
                class="form-control">
        </div>

        <button class="btn btn-warning">
            Update
        </button>

    </form>

</div>

</x-app-layout>