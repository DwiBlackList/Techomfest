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
                                    <label>Team Name</label>
                                    <input type="text" name="namateam" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Peserta 1</label>
                                    <input type="text" name="peserta1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NIK Peserta 1</label>
                                    <input type="text" name="nikpeserta1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email Peserta 1</label>
                                    <input type="email" name="email1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir Peserta 1</label>
                                    <input type="date" name="tgllahir1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Peserta 2</label>
                                    <input type="text" name="peserta2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NIK Peserta 2</label>
                                    <input type="text" name="nikpeserta2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email Peserta 2</label>
                                    <input type="email" name="email2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir Peserta 2</label>
                                    <input type="date" name="tgllahir2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Peserta 3</label>
                                    <input type="text" name="peserta3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NIK Peserta 3</label>
                                    <input type="text" name="nikpeserta3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email Peserta 3</label>
                                    <input type="email" name="email3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir Peserta 3</label>
                                    <input type="date" name="tgllahir3" class="form-control">
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
                                <input type="submit" name="submit" id="submit" value="simpan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection