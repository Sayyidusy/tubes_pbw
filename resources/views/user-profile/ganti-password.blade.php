@extends('user-profile.profile')

@section('contentProfile')
      <!-- profile section starts  -->
      <section class="user-profile">

        <h1 class="heading">.</h1>
        
        <div class="info">
         <div class="judul">
            <h1>Ganti Password</h1>
            <h3>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</h3>
         </div>
         @if (session('success'))
            <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
         @if ($errors->any())
            <div class="alert alert-warning border-left-warning alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                <button type="button" class="close mb-4" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
         </div>

         <div class="info">
          
               <!-- <div class="title">
                 Registration Form
               </div> -->

            <div class="form">
            <form action="{{ route('user-password.update', $user->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $user->id }}">
           
                   
                  <div class="inputfield">
                    <label>Password Lama</label>
                    <input type="password" class="input" name="passwordLama">
                 </div>  
                  <div class="inputfield">
                     <label>Password Baru</label>
                     <input type="password" class="input" name="passwordBaru">
                  </div>  
                 <div class="inputfield">
                     <label>Konfirmasi Password</label>
                     <input type="password" class="input" name="konfirmasiPassword">
                  </div>    
                  

                 <div class="inputfield">
                   <input type="submit" value="Submit" class="btn">
                 </div>
               </div>
            </form>


        </div>

     </section>

    <!-- profile section ends -->
@endsection