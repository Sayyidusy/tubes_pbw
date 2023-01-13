@extends('layouts.app')

@section('head-content')
    <link rel="stylesheet" href="assets/css/style.css">
@endsection

@section('content')
    <!-- home section starts  -->

<section class="home" id="home">
    
    <!-- gambar home  -->
    <div class="image">
        <img src="assets/images/home-pc-text.png" alt="">
    </div>

    <div class="content">
        <h3>Solusi Jasa</h3>
        <h3>Servis PC <span>TEPERCAYA</span></h3>
        <h3>Dan <span>MUDAH</span></h3>
        <a href="#" class="btn">Lihat Selengkapnya</a>
    </div>

  

</section>

<!-- home section ends -->

<!-- service section starts  -->

<section class="service" id="service">

    <h3 class="sub-heading"> Layanan Aplikasi </h3>
    <h1 class="heading"> Aplikasi kami melayani service pc atau laptop serta konsultasi</h1>

    <div class="row">

        <div class="image">
            <img src="assets/images/service-satu.png" alt="">
        </div>

        <div class="content">
            <h3>Professional IT Services & 
                Technology Consulting</h3>
            <p>Kami memberikan layanan Service dan konsultasi untuk menentukan rakitan 
                PC terbaik sesuai dengan Kebutuhan Anda. kami akan membantu Anda untuk 
                menentukan Hardware yang cocok dengan kebutuhan Anda agar PC yang Anda 
                rakit dapat berfungsi optimal.</p>

            <div class="icons-container">
                <div class="icons">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                    <span>Aman</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Murah</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>Terpercaya</span>
                </div>
            </div>
            <a href="#" class="btn">Hubungi Kami</a>
        </div>

    </div>

</section>

<!-- fitur section starts  -->

<section class="fitur" id="fitur">
    <h1 class="heading"> Fitur yang <span>ditawarkan</span></h1>
    <div class="box-container">
        <!-- section box card -->
        <div class="box">
            <img class="image" src="assets/images/s-img-1.jpg" alt="">
            <div class="content">
                <img src="assets/images/fitur-1.png" alt="">
                <h3>Service PC / Laptop</h3>
                <p>Anda mengalami masalah dengan PC atau laptop yang terkena virus, windows hang dan gagal booting, Install ulang atau upgrade versi Windows. Kami siap membantu masalah Anda.</p>
            </div>
        </div>

        <div class="box">
            <img class="image" src="assets/images/s-img-2.jpg" alt="">
            <div class="content">
                <img src="assets/images/fitur-2.png" alt="">
                <h3>Konsultasi</h3>
                <p>Kami menerima konsultasi Gratis baik online maupun offline untuk jasa yang kami tawarkan seperti: service komputer & Laptop, Rakit PC, Install OS, Install Aplikasi, Instal Game, Jaringan Lan/WiFi</p>
            </div>
        </div>

        <div class="box">
            <img class="image" src="assets/images/s-img-3.jpg" alt="">
            <div class="content">
                <img src="assets/images/fitur-3.png" alt="">
                <h3>Jasa Rakit PC</h3>
                <p>Kami menawarkan jasa Rakit PC sesuai dengan kebutuhan yang Anda inginkan dengan pengerjaan yang rapi dan cepat. Peripheral PC dapat disesuaikan dengan kebutuhan dan budget Anda, sehingga tidak membebani.</p>
            </div>
        </div>

    

    </div>

</section>

<!-- fitur section ends -->


<!-- testimoni section starts  -->

<section class="testimoni" id="testimoni">
    <h3 class="sub-heading"> Testimoni </h3>
    <h1 class="heading">Apa pendapat mereka tentang aplikasi jasa rakit PC ini?</h1>

    <div class="swiper-container testimoni-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="assets/images/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>Santi andini</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Tim cepat membalas. Dapat membantu dan memberi saran untuk rakit pc. Pokoknya sangat direkomendasi! </p>
               
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="assets/images/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>Andre Kusuma</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            
               <!-- testimoni -->
               <p>Memperbaiki di EZ PC sangat tepercaya dan murah bangeeeettt, otw langganan disini kalau pc saya kenapa kenapa lagi..</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="assets/images/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>Natasya Putri</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>sudah Dua kali aku coba service pc di tempat service pc pinggir jalan, dan hasilnya tetep aja rusak lagi rusak lagi. Tapi semenjak saya serivice di EZPC kendala yang saya alami sudah aman sampai sekarang.. terimakasi EZPC</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="assets/images/pic-4.png" alt="">
                    <div class="user-info">
                        <h3>Bunga Nafisah</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Benerannnnn ini mah rekomen banget asli deh.. udah mah konsultasi disini gratis.. ramah banget lagi admin nya.. abis itu murah bangett.. padahal saya sudah coba cek di tempat lain dan harganya mahal.. EZPC emang THE BEST.. dehh </p>
            </div>

        </div>
    </div>


</section>

<!-- testimoni section ends -->

<!-- iklan banner  -->
<h1 class="heading">Produk <span>Terbaru</span></h1>
<section class="iklan" id="iklan">
    <div class="row">
        
    <div class="box-iklan">
        <div class="text-iklan">
            <h3>Ayo Perbaiki PC Mu Sekarang!</h3>
            <h2>EZPC.co.id</h2>

            <a href="#" class="btn">Lihat Selengkapnya</a>
        </div>
        <img src="assets/images/iklan-1.png" alt="">
    </div>
</div>
</section>

<!-- iklan banner end  -->

        
   




<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- loader screen page  -->
<!-- <div class="loader-container">
    <img src="assets/images/loadingbarr.gif" alt="">
</div> -->



@endsection