@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Verification</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Multiple Upload</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data Checking</h2>
        <p class="section-lead">
            Silakan upload berkas pendaftaran lomba pada kotak di bawah ini dengan format .zip
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Multiple Upload</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('DataDiriStore') }}" enctype="multipart/form-data" class="dropzone" id="mydropzone">
                            @csrf
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection