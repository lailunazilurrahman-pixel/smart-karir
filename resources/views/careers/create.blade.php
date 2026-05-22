<x-app-layout>

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Tambah Data Karir
            </h3>

        </div>

        <div class="card-body">

            <form action="{{ route('careers.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label>Nama Karir</label>

                    <input type="text"
                        name="name"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label>Deskripsi</label>

                    <textarea name="description"
                        class="form-control"></textarea>

                </div>

                <div class="mb-3">

                    <label>Skill</label>

                    <input type="text"
                        name="skill"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label>Score SAW</label>

                    <input type="number"
                        name="score"
                        class="form-control">

                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

</x-app-layout>