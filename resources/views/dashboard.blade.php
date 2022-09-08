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
        <h4>Silakan daftarkan team anda melalui tombol di bawah ini.</h4>
      </div>
      <div class="card-body">
        <a href="{{url('daftarteam')}}"><button class="btn btn-primary">Daftar</button></a>
      </div>
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
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>Membuat akun</td>
                    <td><div class="badge badge-warning">In Progress</div></td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                        <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>Verifikasi Data Peserta</td>
                    <td><div class="badge badge-success">Completed</div></td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                        <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>Submission Lomba</td>
                    <td><div class="badge badge-info">Todo</div></td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                        <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>Input Data Team</td>
                    <td><div class="badge badge-info">Todo</div></td>
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