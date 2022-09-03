<title>Tambah Team</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <x-app-layout>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" width="150">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Team</h1>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('TeamsStore') }}">

                                @csrf

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">Nama Team</label>
                                    <input id="namateam" type="text" class="form-control" name="namateam" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Nama Team is required
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">Peserta 1</label>
                                    <input id="peserta1" type="text" class="form-control" name="peserta1" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Peserta 1 is required
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">Peserta 2</label>
                                    <input id="peserta2" type="text" class="form-control" name="peserta2" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Peserta 2 is required
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">Peserta 3</label>
                                    <input id="peserta3" type="text" class="form-control" name="peserta3" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Peserta 3 is required
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="kategori">Kategori Lomba</label>
                                    <select id="kategori" class="form-control" name="kategori" value="" required autofocus>
                                        <option>Software</option>
                                        <option>Multimedia</option>
                                        <option>Network</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Kategori Lomba is required
                                    </div>
                                </div>

                                <div class="align-items-center d-flex">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center mt-5 mb-3 text-white">
                        TechComfest 2023
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>