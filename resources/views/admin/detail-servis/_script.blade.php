<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

  // Get All datas into table
  $(document).ready(function () {
    $('.detail-servis-table').DataTable({
        ajax: '{{ url("admin/detail-servis/getAllDetailServis") }}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy:true,
        columns: [
             {data:'id', name: 'id'},
            // {data:'image', name: 'image', orderable: false, searchable: false}
            {data:'namaServis', name: 'nameServis'},
            {data:'deskripsiServis', name: 'deskripsiServis'},
            {data:'poinServis', name: 'poinServis'},
            {data:'hargaServis', name: 'hargaServis'},
            {data:'action', name: 'action', orderable: false, searchable: false}
        ]
    });
  });

   // Store
   $('#addForm').submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this);
    $.ajax({
      url: 'detail-servis',
      method: 'post',
      data: fd,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(response) {
        if (response.errors) {
          let errors = ''
          $.each(response.errors, function(key, value) {
            errors += value + '</br>';
          });
          Swal.fire(
            'Warning',
            errors,
            'warning'
          )
        } else{
          $('.detail-servis-table').DataTable().ajax.reload();
          Swal.fire(
            'Berhasil!',
            response.success,
            'success'
            )
          $("#adddataModal").modal('hide');
        }
      },
      error: function (xhr, status, error) {
        console.log(fd);
        console.log(xhr.responseText);
        Swal.fire(
          'Error',
          'Ada masalah!',
          'error'
        )
      }
    });
  });

  // Delete
  $(document).on('click', '.btn-delete', function (e) {
    e.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        csrf_token = $('meta[name="csrf-token"]').attr('content');

    Swal.fire({
      title: 'Anda yakin ingin menghapus data ini ?',
      text: 'Anda tidak bisa mengembalikannya lagi',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, tetap hapus!'
    }).then((result) => {
        if (result.value) {
          if (result.isConfirmed) {
            $.ajax({
              url: url,
              type: "POST",
              data: {
                  '_method': 'DELETE',
                  '_token': csrf_token
              },
              success: function (response) {
                $('.detail-servis-table').DataTable().ajax.reload();
                Swal.fire(
                  'Terhapus!',
                  'Data berhasil dihapus.',
                  'success'
                )
              },
              error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")"); 
                alert(xhr.responseText);
                Swal.fire(
                  'Error',
                  'Ada masalah!',
                  'error'
                )
              }
            });
          }
        }
    });
  });

  //Edit
  $(document).on('click', '.btn-edit', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var url = $(this).attr('href');
    $.ajax({
        url: url,
        type: 'GET',
        data: {
          '_method': 'GET',
        },
        success: function(response) {
          $('#editModal').modal('show');
          $('#editModal .btn-close').click(function (e) { 
            e.preventDefault();
            $('#editModal').modal('hide');
          });
          // $('#editModal #output-img').attr('src', '/storage/images/profile-images/users/' + response.data.image);
          $('#editModal #id').val(response.data.id);
          $('#editModal #namaServis').val(response.data.namaServis);
          $('#editModal #deskripsiServis').val(response.data.deskripsiServis);
          $('#editModal #poinServis').val(response.data.poinServis);
          $('#editModal #hargaServis').val(response.data.hargaServis);
          
          
        }, 
        error: function (xhr, status, error) {
          var err = eval("(" + xhr.responseText + ")"); 
          alert(xhr.responseText);
          Swal.fire(
            'Error',
            'Ada masalah!',
            'error'
          )
        }
    });
  });

  $('#editForm').submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this); 
    $.ajax({
      url: 'detail-servis/update',
      type: 'POST',
      data: fd,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(response) {
        if (response.errors) {
          let errors = '';
          $.each(response.errors, function(key, value) {
            errors += value + '</br>';
          });
          Swal.fire(
            'Warning',
            errors,
            'warning'
          )
        } else{
          $('.detail-servis-table').DataTable().ajax.reload();
          Swal.fire(
            'Berhasil!',
            response.success,
            'success'
            )
          $("#editModal").modal('hide');
        }
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText);
        Swal.fire(
          'Error',
          'Ada masalah!',
          'error'
        );
      }
    });
  });
</script>