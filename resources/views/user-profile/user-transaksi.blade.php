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
          <th>Tanggal</th>
          <th>Harga</th>
          <th>Review</th>
        </tr>
  
      <tr>
  
        <td>1</td>
        <td>Mark</td>
        <td>Perbaikan Motherboard</td>
        <td>12 November 2022</td>
        <td>Rp 300.000.00</td>
        <td><a class="postTestimoni" href="#">Lihat Review</a></td>
        
        </tr>
  
      <tr>
  
        <td>2</td>
        <td>Mark</td>
        <td>Perbaikan Motherboard</td>
        <td>12 November 2022</td>
        <td>Rp 300.000.00</td>
        <td><a class="active-table" href="#">Klik Disini</a></td>
  
      </tr>
  
      <tr>
  
        <td>3</td>
        <td>Mark</td>
        <td>Perbaikan Motherboard</td>
        <td>12 November 2022</td>
        <td>Rp 300.000.00</td>
        <td><a class="active-table" href="#">Klik Disini</a></td>
  
      </tr>
  
      <tr>
  
        <td>4</td>
        <td>Mark</td>
        <td>Perbaikan Motherboard</td>
        <td>12 November 2022</td>
        <td>Rp 300.000.00</td>
        <td><a class="active-table" href="#">Klik Disini</a></td>
  
      </tr>
  
      <tr>
  
        <td>5</td>
        <td>Mark</td>
        <td>Perbaikan Motherboard</td>
        <td>12 November 2022</td>
        <td>Rp 300.000.00</td>
        <td><a class="active-table" href="#">Klik Disini</a></td>
        
  
      </tr>
  
   </table>

    </section>

    <!-- table section end -->


@endsection