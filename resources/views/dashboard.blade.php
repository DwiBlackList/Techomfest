@extends('layouts.app')
@section('content')
@if(Auth::user()->role == 'Admin')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="section-body">
    <section class="section">
      <h2 class="section-title">Team yang telah terverifikasi</h2>
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th>Task</th>
                    <th>Progress</th>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@else
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="section-body">
    <h2 class="section-title">Pendaftaran</h2>
    <!-- <p class="section-lead">Silakan daftarkan team anda melalui tombol di bawah ini.</p> -->
    <div class="card">
      <div class="card-header">
        @if(empty($teams))
        <h4>Silakan daftarkan team anda melalui tombol di bawah ini.</h4>
      </div>
      <div class="card-body">
        <a href="{{ route('TeamsCreate') }}"><button class="btn btn-primary">Daftar Team</button></a>
      </div>
      @elseif($datadiri->isEmpty())
      <h4>Team telah ada , silahkan verifikasi data diri team</h4>
    </div>
    <div class="card-body">
      <a href="{{ route('DataDiriCreate') }}"><button class="btn btn-primary">Verifikasi Data</button></a>
    </div>
    @else
    <h4>Pendaftaran Telah Selesai</h4>
    @endif
  </div>
  </div>
  <div class="section-body">
    <section class="section">
      <div class="section-header">
      </div>
      <h2 class="section-title">Progress Lomba</h2>
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th>
                      <div class="custom-checkbox custom-control">
                      </div>
                    </th>
                    <th>Task</th>
                    <th>Progress</th>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-control d-flex justify-content-center">
                        <input type="checkbox" class="control-input" id="checkbox1" name="checkbox1" value="" <?php if (!empty($teams)) {  ?> checked <?php } ?> disabled>
                        <label for="checkbox-1">&nbsp;</label><br>
                      </div>
                    </td>
                    <td>Input Data Team</td>
                    <td>
                      @if(empty($teams))
                      <div class="badge badge-info">Todo</div>
                      @else
                      <div class="badge badge-success">Completed</div>
                      @endif
                    </td>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" class="control-input" id="checkbox1" name="checkbox1" value="" <?php if (!empty($datadiri)) { foreach ($datadiri as $x) { if ($x->status == 'Verified') { ?> checked <?php } } } ?> disabled>
                        <label for="checkbox-1">&nbsp;</label><br>
                      </div>
                    </td>
                    <td>Verifikasi Data Peserta</td>
                    <td>
                      @if(!$datadiri->isEmpty())
                      @foreach($datadiri as $x)
                      @if($x->status == 'Not Verified')
                      <div class="badge badge-warning">In Progress</div>
                      @elseif($x->status == 'Verified')
                      <div class="badge badge-success">Completed</div>
                      @elseif($x->status == 'Denied')
                      <div class="badge badge-danger">Upload Ulang Dibutuhkan</div>
                      @endif
                      @endforeach
                      @else
                      <div class="badge badge-info">Todo</div>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" class="control-input" id="checkbox1" name="checkbox1" value=""  disabled <?php if ($subsmission == 'tdkada' || !$subsmission->isEmpty()) {  ?> checked <?php } ?>>
                        <label for="checkbox-1">&nbsp;</label><br>
                      </div>
                    </td>
                    <td>Submission Lomba</td>
                    <td>
                      @if($subsmission == 'tdkada' || $subsmission->isEmpty())
                      <div class="badge badge-info">Todo</div>
                      @else
                      <div class="badge badge-success">Completed</div>
                      @endif                      
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@endif
@endsection