<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

  // Get All Users into table
  $(document).ready(function () {
    $('.testimoni-table').DataTable({
        ajax: '{{ url("admin/testimoni/getAllTestimoni") }}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy:true,
        columns: [
            {data:'id', name: 'id'},
            {data:'nama', name: 'nama'},
            {data:'namaServis', name: 'namaServis'},
            {data:'hargaServis', name: 'hargaServis'},
            {data:'tanggal', name: 'tanggal'},
            {data:'alamat', name: 'alamat'},
            

            // {data:'action', name: 'action', orderable: false, searchable: false}
        ]
    });
  });

  //approve 


  


</script>