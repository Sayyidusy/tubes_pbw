<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

  // Get All Users into table
  $(document).ready(function () {
    $('.konsultasi-table').DataTable({
        ajax: '{{ url("admin/konsultasi/getAllKonsultasi") }}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy:true,
        columns: [
            {data:'id', name: 'id'},
            {data:'nama', name: 'nama'},
            {data:'email', name: 'email'},
            {data:'nohp', name: 'nohp'},
            {data:'domisili', name: 'domisili'},
            {data:'keluhan', name: 'keluhan'},
        ]
    });
  });



  
</script>