<header>
    <a href="#" class="logo"><i class="fa fa-desktop" aria-hidden="true"></i></i>EZ PC</a>
    <!-- <a href="#" class="logo"><i class="fas fa-utensils"></i>EZ PC</a> -->
    <nav class="navbar">
        <a href="{{ url('/') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Beranda</a>
        {{-- <a href="{{ url('rakit') }}" class="{{ (request()->is('rakit')) ? 'active' : '' }}">Jasa Rakit PC</a> --}}
        <a href="{{ url('servis') }}" class="{{ (request()->is('servis')) ? 'active' : '' }}">Jasa Servis PC</a>
        <a href="{{ url('tentangKami') }}" class="{{ (request()->is('tentangKami')) ? 'active' : '' }}">Tentang Kami</a>
        <a href="{{ url('hubungiKami') }}" class="{{ (request()->is('hubungiKami')) ? 'active' : '' }}">Hubungi Kami</a>
    </nav>

    <nav class="dropdown-profile">
      @if (Route::has('login'))
            <div class="d-flex icon-nav">
                @auth
                <ul>
                  <li>
                    {{-- <span class="material-icons-outlined"> notifications </span> --}}
                  </li>    
          
                
                  <li>
          
                    <div class="icons">
                        <!-- <img src="assets/images/profile.png" class="profile" /> -->
                        <a href="#" class="fas fa-user"></a>
                    </div>
                    <ul>
                        <li class="sub-item">
                            <span class="material-icons-outlined"> manage_accounts </span>
                            <a href="{{ url('user-profile/'.Auth::user()->id.'/edit') }}"><p>Update Profile</p></a>
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
                @else
                    <ul>
                      <li>
                        <div  ><a href="{{ route('login') }}" style="color: #ffff">Log In</a></div>
                        <div ><a href="{{ route('register') }}" style="color: #ffff" >Register</a></div>  
                      </li>
                    </ul>            
                @endauth
            </div>
    @endif 
      </nav>
</header>




