@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="section-body">
        <h2 class="section-title">Pendaftaran Team</h2>
        <!-- <p class="section-lead">Silakan daftarkan team anda melalui tombol di bawah ini.</p> -->
        <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('TeamsStore') }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Team Name</label>x
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Peserta 1</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NIK Peserta 1</label>
                                    <input type="text" name="nikpeserta1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Peserta 2</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NIK Peserta 2</label>
                                    <input type="text" name="nikpeserta2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Peserta 3</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NIK Peserta 3</label>
                                    <input type="text" name="nikpeserta3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Companion</label>
                                    <input type="text" name="dosen" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>School</label>
                                    <input type="text" name="sekolah" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="kategori">
                                        <option>Multimedia</option>
                                        <option>Network</option>
                                        <option>Software</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection