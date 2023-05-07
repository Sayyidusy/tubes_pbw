@extends('user-profile.profile')

@section('contentProfile')
     <!-- table section  starts -->
     <section class="histori" id="histori">
        <h3 class="sub-heading"> Histori Transaksi Anda </h3>
        <h1 class="heading">Berikut adalah riwayat data dari Transaksi jasa servis anda</h1>

    <table class="histori-transaksi" >
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Jenis Servis</th>
          <th>Harga</th>
          <th>Tanggal</th>
          <th>Alamat</th>
       
        </tr>
  
      <tr>
  
        <td>1</td>
        <td>Sayyid</td>
        <td>Perbaikan Motherboard</td>
        <td>Rp 250.000</td>
        <td>16 Januari 2023</td>
        <td>Bandung</td>
       
        {{-- <td><a class="postTestimoni" href="#">Klik Disini</a></td> --}}
        
        </tr>
        

  
   </table>

    </section>

    <!-- table section end -->


@endsection