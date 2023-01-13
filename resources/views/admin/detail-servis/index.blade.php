@extends('admin.layout.layout')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div id="success_message"></div>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">Add Detail</button>

          <p class="card-title mt-3">List Detail</p>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-hover expandable-table detail-servis-table" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Komponen</th>
                      <th>Deskripsi Servis</th>
                      <th>Poin Servis</th>
                      <th>Harga Servis</th>

                      <th>Aksi</th>
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

@include('admin.detail-servis._modal')

@endsection

@section('js-content')
@include('admin.detail-servis._script')
@endsection

