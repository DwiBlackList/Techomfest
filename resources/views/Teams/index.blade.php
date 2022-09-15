@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Team</h1>
    </div>
    <div class="section-body">
        <h2 class="section-title">Team Data</h2>
        <!-- <p class="section-lead">Silakan daftarkan team anda melalui tombol di bawah ini.</p> -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Team Name</th>
                            <th scope="col">Companion</th>
                            <th scope="col">School</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($teams))
                        Team Found. <a href="{{ route('TeamsDelete' , $teams->id) }}">Delete Team</a>
                        @foreach($peserta as $x)
                        <tr>
                            <th>{{ $x->namapeserta }}</th>
                            <td>{{ $teams->namateam }}</td>
                            <td>{{ $x->namapembina }}</td>
                            <td>{{ $x->asalsekolah }}</td>
                            <td>{{ Auth::user()->kategori }}</td>
                            <td>
                                <div class="badge badge-success">Completed</div>
                            </td>
                            @endforeach
                            @else
                            <td colspan="6" align="center">
                                <h1>Belum buat team</h1> <a href="{{ Route('TeamsCreate') }}">Tambah Team</a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection