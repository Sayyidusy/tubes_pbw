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
          <a href="https://wa.link/f1hyp9">
            <button type = "button" class = "btn">Service Sekarang</button>
          </a>
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

</script>
@endsection