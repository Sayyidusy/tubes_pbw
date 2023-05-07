@extends('layouts.app')

@section('head-content')
<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css?v=').time()}}">
@endsection

@section('content')
<section class="home" id="home">
    
    <!-- gambar home  -->
    <div class="image">
        <img src="assets/images/about(1).png" alt="">
    </div>

    <div class="content">
        <h3>Tentang Kami</h3>
        
        <h3>Team<span>ChampionDesk</span></h3>
        <h3>Kelas <span>45-03</span></h3>
        {{-- <a href="#" class="btn">Lihat Selengkapnya</a> --}}
    </div>

  

</section>
@endsection