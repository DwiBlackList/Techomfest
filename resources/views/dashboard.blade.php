@extends('layouts.app')
@section('content')
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
      @elseif(empty($datadiri))
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
                    <td>Membuat akun</td>
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
                        <input type="checkbox" class="control-input" id="checkbox1" name="checkbox1" value="" <?php if (!empty($datadiri)) {  ?> checked <?php } ?> disabled>
                        <label for="checkbox-1">&nbsp;</label><br>
                      </div>
                    </td>
                    <td>Verifikasi Data Peserta</td>
                    <td>
                      @if(empty($datadiri))
                      <div class="badge badge-info">Todo</div>
                      <div class="badge badge-warning">In Progress</div>
                      @else
                      <div class="badge badge-success">Completed</div>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" class="control-input" id="checkbox1" name="checkbox1" value="" disabled>
                        <label for="checkbox-1">&nbsp;</label><br>
                      </div>
                    </td>
                    <td>Submission Lomba</td>
                    <td>
                      <div class="badge badge-info">Todo</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" class="control-input" id="checkbox1" name="checkbox1" value="" disabled>
                        <label for="checkbox-1">&nbsp;</label><br>
                      </div>
                    </td>
                    <td>Input Data Team</td>
                    <td>
                      <div class="badge badge-info">Todo</div>
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
@endsection