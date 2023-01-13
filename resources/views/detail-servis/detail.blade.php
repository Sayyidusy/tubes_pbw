@extends('layouts.app')

@section('head-content')
    {{-- <link rel="stylesheet" href="assets/css/detailService.css"> --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/css/detailService.css?v=').time()}}">
@endsection

@section('content')
<br><br><br><br><br><br><br><br>
    

<!-- DETAIL SERVICE -->
<div class = "card-wrapper">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            {{-- <img src = "assets/images/servis1.jpg" alt = "jasaServis image"> --}}
            <img src = "{{ asset('assets/images/servis1.jpg?v=').time()}}" alt = "jasaServis image">
            <img src = "{{ asset('assets/images/servis2.jpg?v=').time()}}" alt = "jasaServis image">
            <img src = "{{ asset('assets/images/servis3.jpg?v=').time()}}" alt = "jasaServis image">
            <img src = "{{ asset('assets/images/servis4.jpg?v=').time()}}" alt = "jasaServis image">

     
          </div>
        </div>
        <div class = "img-select">
          <div class = "img-item">
            <a href = "#" data-id = "1">
              <img src = "{{ asset('assets/images/servis1.jpg?v=').time()}}" alt = "jasaServis image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "2">
              <img src = "{{ asset('assets/images/servis2.jpg?v=').time()}}" alt = "jasaServis image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "3">
              <img src = "{{ asset('assets/images/servis3.jpg?v=').time()}}" alt = "jasaServis image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "4">
              <img src = "{{ asset('assets/images/servis4.jpg?v=').time()}}" alt = "jasaServis image">
            </a>
          </div>
        </div>
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-title">{{ $detail->namaServis }}</h2>
        <a href = "#" class = "product-link">Jasa Service EZPC</a>
        <div class = "product-rating">
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div>

        

        <div class = "product-detail">
          <h2>Deskripsi Servis </h2>
          <p>{{ $detail->deskripsiServis }}</p>
          <ul>
            <li>- {{ $detail->poinServis }}</li>
            {{-- <li>- <span>Penggantian komponen motherboard yang rusak atau cacat, seperti chip, IC, atau komponen lainnya.</span></li>
            <li>- <span>Perbaikan konektivitas, seperti perbaikan port USB, LAN, atau konektor lainnya yang rusak atau tidak berfungsi dengan baik.</span></li>
            <li>- <span>Penggantian BIOS atau firmware yang rusak atau tidak sesuai dengan sistem operasi yang digunakan. </span></li> --}}
            
          </ul>
        </div>
        
        <div class = "product-price">
            <!-- <p class = "last-price">Old Price: <span>$257.00</span></p> -->
            <p class = "new-price">Harga Service: <span>{{ $detail->hargaServis }}</span></p>
          </div>

        <div class = "purchase-info">
            {{-- <label for = "quantity">Jumlah : </label>
          <input type = "number" min = "0" value = "1"> --}}
          {{-- <button type = "button" class = "btn">
            Konsultasi
          </button> --}}
          {{-- <a href="https://wa.link/f1hyp9">
            <button type = "button" class = "btn">Service Sekarang</button>
          </a> --}}

           
          </div>
          <!-- modal form button  -->
          <div>
            <button id="show-login" class="btn">Servis Sekarang</button>
          </div>
          <form action="{{ url('/testimoni') }}" method="POST">
            @csrf
          
          <div class="popup">
            <div class="close-btn">&times;</div>
            <div class="form">
              <h2>Jasa Servis</h2>
              <div class="form-element">
                <label for="nama">Nama</label>
                <input type="text" id="nama" placeholder="Masukan nama" name="nama" required>
              </div>

              <div class="form-element">
                <label for="detail-servis">Servis</label>
                {{-- <h1>{{ $detail->namaServis }}</h1> --}}
                <input type="text" id="namaServis" name="namaServis"  value="{{ $detail->namaServis }}" readonly required>
              </div>
              <div class="form-element">
                <label for="harga">harga</label>
                {{-- <h1>{{ $detail->namaServis }}</h1> --}}
                <input type="text" id="harga" name="hargaServis"  value="{{ $detail->hargaServis }}" readonly required>
              </div>

              <div class="form-element">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" placeholder="Masukan tanggal" name="tanggal" required>
              </div>
              <div class="form-element">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" placeholder="Masukan alamat" name="alamat" required>
              </div>

              

              <div class="form-element">         
               {{-- submit  --}}
              
                {{-- <a href="https://wa.link/f1hyp9" class="btn" ></a> --}}
                {{-- <button type = "button" class = "btn" >Service Sekarang</button> --}}
                <input type="submit" value="Kirim" class="btn"> 
             
              </div> 
            </div>
          </form>



        </div>


       
      </div>
    </div>
  </div>
<!-- DETAIL SERVICE END -->


<script>
  const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);

// modal
document.querySelector("#show-login").addEventListener("click",function(){
    document.querySelector(".popup").classList.add("active");
  });
  document.querySelector(".popup .close-btn").addEventListener("click",function(){
    document.querySelector(".popup").classList.remove("active");
  });

</script>
@endsection