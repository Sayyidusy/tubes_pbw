<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rakit PC</title>
    
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        {{--  --}}
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
            rel="stylesheet"/>
        <!-- File CSS link  -->
        <link rel="stylesheet" href="{{ url('assets/css/profile.css') }}">
    
    </head>
    <body>
        
    <!-- header section  starts -->
    
    <header>
        <a href="#" class="logo"><i class="fa fa-desktop" aria-hidden="true"></i></i>EZ PC</a>
        <!-- <a href="#" class="logo"><i class="fas fa-utensils"></i>EZ PC</a> -->
        <nav class="navbar">
          <a href="{{ url('/') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Beranda</a>
          {{-- <a href="{{ url('rakit') }}" class="{{ (request()->is('rakit')) ? 'active' : '' }}">Jasa Rakit PC</a> --}}
          <a href="{{ url('servis') }}" class="{{ (request()->is('servis')) ? 'active' : '' }}">Jasa Servis PC</a>
          <a href="{{ url('tentangKami') }}" class="{{ (request()->is('tentangKami')) ? 'active' : '' }}">Tentang Kami</a>
          {{-- <a href="{{ url('hubungiKami') }}" class="{{ (request()->is('hubungiKami')) ? 'active' : '' }}">Hubungi Kami</a> --}}
        </nav>

        <nav class="dropdown-profile">
            <ul>
              {{-- <li>
                <span class="material-icons-outlined"> notifications </span>
              </li>     --}}
              <li>
                <div id="menu-btn" class="fas fa-bars" style="color: #ffff; font-size: 2rem"></div>
              </li>
            
              <li>
                <div class="icons">
                    
                    <!-- <img src="assets/images/profile.png" class="profile" /> -->
                    <a href="#" class="fas fa-user"></a>
                </div>
                <ul>
                    <li class="sub-item">
                        <span class="material-icons-outlined"> manage_accounts </span>
                        <p>Update Profile</p>
                    </li>

                  <li class="sub-item">
                    <span class="material-icons-outlined">
                      format_list_bulleted
                    </span>
                    <p>Histori Transaksi</p>
                  </li>
                  
                  <li class="sub-item">
                    <span class="material-icons-outlined"> logout </span>
    
                    <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          this.closest('form').submit();"><p>Logout</p></a>
                    </form>
                  
                   
                  </li>

                </ul>
              </li>
            </ul>
          </nav>
    </header>


    <!-- SIDE BAR section starts-->
    <div class="side-bar">

        <div id="close-btn">
           <i class="fas fa-times"></i>
        </div>
     
        <div class="profile">
            
           <img src="{{ asset('storage/images/profile-images/users/'.$user->image) }}" class="image" alt="">
           <h3 class="name">Sayyidusy S.A</h3>
           <p class="role">User</p>
           <a href="{{ url('user-profile/'.Auth::user()->id.'/edit') }}" class="btn">Akun Saya</a>
        </div>
     
        <nav class="navbar">
           {{-- <a href="{{ url('notifikasi') }}"><i class="fas fa-bell"></i><span>Notifikasi</span></a> --}}
           <a href="{{ url('user-password/'.$user->id.'/edit') }}"><i class="fa fa-key" aria-hidden="true"></i><span>Ganti Password</span></a>
           <a href="{{ url('user-transaksi/'.$user->id) }}"><i class="fas fa-book"></i><span>Histori Transaksi</span></a>

         
           {{-- <a href="testimoni.html"><i class="fas fa-comment"></i><span>Histori Review</span></a> --}}


           <form action="{{ route('logout') }}" method="post">
            @csrf
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();"><i class="fas fa-power-off"></i><span>Keluar</span></a>
          </form>
{{-- 
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              this.closest('form').submit();"><i class="fas fa-power-off"></i><span>Keluar</span></a> --}}
              
        </nav>
     
     </div>

    <!-- Side bar section ends -->
     
    @yield('contentProfile')
   
    <script>

      let sideBar = document.querySelector('.side-bar');

      document.querySelector('#menu-btn').onclick = () =>{
        sideBar.classList.toggle('active');
        body.classList.toggle('active');
      }

      document.querySelector('#close-btn').onclick = () =>{
        sideBar.classList.remove('active');
        body.classList.remove('active');
      }

      window.onscroll = () =>{
        profile.classList.remove('active');
        search.classList.remove('active');

        if(window.innerWidth < 1200){
            sideBar.classList.remove('active');
            body.classList.remove('active');
        }
      }
    </script>
  





    
</body>


</html>