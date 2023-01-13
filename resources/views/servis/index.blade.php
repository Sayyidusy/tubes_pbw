@extends('layouts.app')

@section('head-content')
    <link rel="stylesheet" href="assets/css/style.css">
@endsection

@section('content')
    <!-- home section starts  --><!-- home section starts  -->

<section class="home" id="home">
    
    <!-- <div class="image">
        <img src="assets/images/home-pc-text.png" alt="">
    </div> -->

    

    <div class="content">
        <div class="content-service">
            <h3>Solusi Service PC & Laptop</h3>
            <h3>Online <span>Terpercaya</span> Dan <span>Mudah</span></h3>
            <a href="#" class="btn">Lihat Selengkapnya</a>
        </div>
        
    </div>

  

</section>

<!-- home section ends -->

<!-- konsultasi section starts  -->
<h1 class="heading">Kenapa Harus <span>EZ PC</span> ?</h1>
<section class="konsultasi" id="konsultasi">
    

    <div class="content-point">
        <ul>
            <li>
                <div class="point">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <div class="point-content">
                        <h3>Berkualitas & Garansi</h3>
                        <p>Kami memberikan pelayanan service profesional dengan menyediakan sparepart berkualitas Original dan Bergaransi
                    </div>
                </div>
            </li>

            <li>
                <div class="point">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <div class="point-content">
                        <h3>Harga lebih murah dan jujur</h3>
                        <p>Kami memberikan pelayanan service profesional dengan menyediakan sparepart berkualitas Original dan Bergaransi</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="point">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <div class="point-content">
                        <h3>PROFESSIONAL & BERPENGALAMAN</h3>
                        <p>Kami memberikan pelayanan service profesional dengan menyediakan sparepart berkualitas Original dan Bergaransi
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="row">
        
        <!-- <div class="image">
            <img src="assets/images/konsultasi-img.jpg" alt="">
        </div> -->
 
        <form action="{{ url('/konsultasi') }}" method="POST" id="add_form" onsubmit="return submitForm(this);">
            @csrf
            <h1 class="heading">Konsultasi Gratis</h1>
            <div class="inputBox">
                <input id="nama" type="text" placeholder="Nama" name="nama" required>
                <input type="email" placeholder="Email" name="email" required>
            </div>

            <div class="inputBox">
                <input id="nohp" type="number" placeholder="No. Whatsapp" name="nohp" required>
                <input id="domisili" type="text" placeholder="Domisili" name="domisili" required>
            </div>

            <textarea id="keluhan" placeholder="Isi keluhan disini.." name="keluhan"  cols="30" rows="10" required ></textarea>

            {{-- <a href="https://wa.link/f1hyp9" class="btn"></a> --}}
            <input type="submit" value="Kirim" class="btn" id="submit"> 

        </form>

    </div>

</section>

<!-- konsultasi section ends -->

<!-- fitur section starts  -->

<section class="fitur" id="fitur">

    <div class="box-container">
        <div class="box">
            <div class="box-text">
                <h3>PC kamu rusak?</h3>
                <h3>Laptop kamu error?</h3>
                <p>EZPC menyediakan jasa perbaikan yang terpercaya dan dapat diandalkan. Saat PC atau Laptop anda mengalami kerusakan, anda tidak perlu pergi ke toko servis, karena kami akan memperbaiki laptop & HP anda di lokasi dan pada waktu yang sesuai dengan kenyamanan anda</p>
                <a href="#" class="btn">Konsultasi Gratis</a>
            </div>
        </div>

        <div class="box">
            <img class="image" src="assets/images/s-img-1.jpg" alt="">
            <div class="content">
                <img src="assets/images/fitur-2.png" alt="">
                <h3>Konsultasi</h3>
                <p>Kami menerima konsultasi Gratis baik online maupun offline untuk jasa yang kami tawarkan seperti: service komputer & Laptop, Rakit PC, Install OS, Install Aplikasi, Instal Game, Jaringan Lan/WiFi</p>
            </div>
        </div>

        <div class="box">
            <img class="image" src="assets/images/s-img-2.jpg" alt="">
            <div class="content">
                <img src="assets/images/fitur-3.png" alt="">
                <h3>Jasa Rakit PC</h3>
                <p>Kami menawarkan jasa Rakit PC sesuai dengan kebutuhan yang Anda inginkan dengan pengerjaan yang rapi dan cepat. Peripheral PC dapat disesuaikan dengan kebutuhan dan budget Anda, sehingga tidak membebani.</p>
            </div>
        </div>

    

    </div>

</section>

<!-- fitur section ends -->

<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading">Bagaimana Cara  <span>Kerjanya?</span></h1>

    <section class="steps">

        <div class="box">
            <img src="assets/images/step-1.jpg" alt="">
            <h3>Lakukan Konsultasi</h3>
        </div>
        <div class="box">
            <img src="assets/images/step-2.jpg" alt="">
            <h3>Pilih Jasa Servis</h3>
        </div>
        <div class="box">
            <img src="assets/images/step-3.jpg" alt="">
            <h3>Lakukan Penservisan</h3>
        </div>
        <div class="box">
            <img src="assets/images/step-4.jpg" alt="">
            <h3>Servis Selesai</h3>
        </div>
    
    </section>

</div>

<!-- steps section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">Jasa <span> Service </span>Kami </h1>
    <div class="box-container">
        <div class="box">
            <img src="assets/images/g-1.jpg" alt="">
            <div class="content">
                <h3>Motherboard</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/1') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-2.jpg" alt="">
            <div class="content">
                <h3>Processor</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/2') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-3.jpg" alt="">
            <div class="content">
                <h3>Thermal Paste</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/3') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-4.jpg" alt="">
            <div class="content">
                <h3>VGA Card</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/4') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-5.jpg" alt="">
            <div class="content">
                <h3>Pembersihan Komputer</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/5') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-6.jpg" alt="">
            <div class="content">
                <h3>Power Supply</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/6') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-7.jpg" alt="">
            <div class="content">
                <h3>Ganti Hardisk</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/7') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-8.jpg" alt="">
            <div class="content">
                <h3>Perbaikan RAM</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/8') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-9.jpg" alt="">
            <div class="content">
                <h3>Ganti ROM</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/9') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-10.jpg" alt="">
            <div class="content">
                <h3>Perbaikan Water Cooling</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/10') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-11.jpg" alt="">
            <div class="content">
                <h3>Nama Komponen</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/11') }}" class="btn">Perbaiki</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/g-12.jpg" alt="">
            <div class="content">
                <h3>Ganti Case PC</h3>
                <p>Atasi segera masalah pada ...mu hanya di EZPC!</p>
                <a href="{{ url('detail-servis/12') }}" class="btn">Perbaiki</a>
            </div>
        </div>

    </div>

</section>
    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
   
//    function submitForm(form){
//     swal({
//         title: "Anda yakin?",
//         text: "Data akan dikirim!",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,
//     })
//     .then((isOkay) => {
//         if (isOkay) {
//             // form.submit();
//             swal("Data berhasil dikirim!", {
//                 icon: "success",
//             }).then(function() {
//             form.submit();
//          })
//         }
//     });
//     return false;
//    }
   
//    $("#submit").click(function(){
//     var nama = $("#nama").val();
//     var email = $("#email").val();
//     var nohp = $("#nohp").val();
//     var domisili = $("#domisili").val();
//     var keluhan = $("#keluhan").val();

//     if (nama == '' || email == '' || nohp == '' || domisili == '' || keluhan == '') {
//        swal({
//         title: "Gagal!",
//         text: "Data tidak boleh kosong!",
//         icon: "warning",
//         button: "OK",
//        });
//     }else {
//          swal({
//           title: "Berhasil!",
//           text: "Data berhasil disimpan!",
//           icon: "success",
//           button: "OK",
//          });
//     }
//    });

$("#addform").submit(function(e){
    e.preventDefault();
    const fd = new FormData(this);
    $.ajax({
        url: "{{ url('addform') }}",
        type: "POST",
        data: fd,
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
          $('.konsultasi-table').DataTable().ajax.reload();
          Swal.fire(
            'Berhasil!',
            response.success,
            'success'
            )
          $("#addform").modal('hide');
        }
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText)
        Swal.fire(
          'Error',
          'Ada masalah!',
          'error'
        )
      }
    });
  });
   

    

  
</script>

@endsection