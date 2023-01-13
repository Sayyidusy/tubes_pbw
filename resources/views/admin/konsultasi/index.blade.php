@extends('admin.layout.layout')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div id="success_message"></div>

          <p class="card-title mt-3">List Konsultasi</p>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-hover expandable-table konsultasi-table" style="width:100%">
                  <thead>
                    <tr>

                      <th>ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Hp</th>
                      <th>Domisili</th>
                      <th>Keluhan</th>
                      
                    </tr>
                  </thead>
               </table>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
  </div>
</div>



@endsection

@section('js-content')
@include('admin.konsultasi._script')
@endsection

