<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rakit PC</title>

    <!-- font awesome cdn link  -->
    <link rel="shortcut icon" type="image" href="admin/images/favicon.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- tambah font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>

    <!-- File CSS l+0000ink  -->
    
    @yield('head-content')

</head>
<body>
            {{-- Nav Bar --}}
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
            @yield('content')
            </main>
            
            {{-- footer --}}
            @include('layouts.footer')
            
<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- swiper js  -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Fle JS link  -->
{{-- <script src="{{ url("assets/js/script.js") }}"></script> --}}
<script>
    var swiper = new Swiper(".testimoni-slider", {
      spaceBetween: 20,
      centeredSlides: true,
      autoplay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      loop:true,
      breakpoints: {
        0: {
            slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
</script>


</body>
</html>