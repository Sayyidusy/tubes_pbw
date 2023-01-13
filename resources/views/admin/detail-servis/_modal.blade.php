{{-- Add Detail Sevis Modal --}}
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel"  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Add Servis Data</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="#" method="POST" id="add_form" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
              {{-- <div class="profile-pic mb-4">
                  <label class="-label" for="file-add">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Ganti Gambar</span>
                  </label>
                  <input id="file-add" type="file" name="imgUpload" class="upload-img add" accept=".jpeg,.png,.jpg,.svg" />
                  <img src="{{asset('/storage/images/profile-images/users/user.png')}}" class="shadow" id="output-img" width="200" alt="profile_img"/>
              </div> --}}
              <div class="form-group mb-3">
                  <input type="text" required class="name form-control" id="namaServis" name="namaServis" autocomplete="off" placeholder="Nama Servis">
              </div>
              
              <div class="form-group mb-3">
                  <input type="text" required class="name form-control" id="deskripsiServis" name="deskripsiServis" autocomplete="off" placeholder="Deskripsi">
              </div>
              <div class="form-group mb-3">
                  <input type="text" required class="name form-control" id="poinServis" name="poinServis" autocomplete="off" placeholder="sub deskripsi">
              </div>
              <div class="form-group mb-3">
                  <input type="text" required class="name form-control" id="hargaServis" name="hargaServis" autocomplete="off" placeholder="harga">
              </div>
              
          </div>
          <div class="modal-footer">
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit" class="btn btn-primary btn-add">Create</button>
          </div>
        </form>
      </div>
  </div>
</div>

{{-- Edit User Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editLabel"  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editLabel">Edit Data</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="#" method="POST" id="editForm">
            @csrf
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-body">
              {{-- <div class="profile-pic mb-4">
                  <label class="-label" for="file-edit">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Ganti Gambar</span>
                  </label>
                  <input id="file-edit" type="file" name="imgUpload" class="upload-img edit" accept=".jpeg,.png,.jpg,.svg" />
                  <img src="" class="shadow" id="output-img" width="200" alt="profile_img"/>
              </div> --}}
              <div class="form-group mb-3">
                  <label for="namaServis">Nama Servis</label>
                  <input type="text" required class="name form-control" id="namaServis" name="namaServis" autocomplete="off">
              </div>
             
              <div class="form-group mb-3">
                  <label for="deskripsiServis">Deskripsi</label>
                  <input type="text" required class="name form-control" id="deskripsiServis" name="deskripsiServis" autocomplete="off">
              </div>
              <div class="form-group mb-3">
                  <label for="poinServis">Sub Deskripsi</label>
                  <input type="textarea" required class="name form-control" id="poinServis" name="poinServis" autocomplete="off">
              </div>
              <div class="form-group mb-3">
                  <label for="hargaServis">Harga</label>
                  <input type="text" required class="name form-control" id="hargaServis" name="hargaServis" autocomplete="off">
              </div>
              
            </div>

            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit" class="btn btn-primary btn-update">Update</button>
            </div>
          </form>
      </div>
  </div>
</div>

