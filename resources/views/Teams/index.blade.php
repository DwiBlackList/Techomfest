@extends('layouts.app')
@section('content')
@if(!empty($teams))
                    {{ $teams->namateam }}
                    {{ Auth::user()->kategori }}
                    @foreach($peserta as $x)
                    {{ $x->namapeserta }}
                    @endforeach

                    <a href="{{ route('TeamsDelete' , $teams->id) }}">{{ $teams->id }}</a>

                    @else
                    <h1>Belum buat team</h1>
                    @endif        
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
                            <th scope="col">No</th>
                            <th scope="col">Team Name</th>
                            <th scope="col">Companion</th>
                            <th scope="col">School</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Entahlah</td>
                            <td>Kuwat Santoso</td>
                            <td>SMK Palapa</td>
                            <td>Software</td>
                            <td><div class="badge badge-success">Completed</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection