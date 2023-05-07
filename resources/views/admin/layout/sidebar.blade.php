<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/users') }}">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/detail-servis') }}">
        <i class="ti-list menu-icon"></i>
        <span class="menu-title">Detail Servis</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/konsultasi') }}">
        <i class="ti-headphone-alt menu-icon"></i>
        <span class="menu-title">Konsultasi</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/testimoni') }}">
        <i class="ti-comment menu-icon"></i>
        <span class="menu-title">Testimoni</span>
      </a>
    </li>
    
   

    {{-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#pcbulds" aria-expanded="false" aria-controls="pcbulds">
        <i class="ti-package menu-icon"></i>
        <span class="menu-title">Full PC Builds</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="pcbulds">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/good-pcbuild') }}">Good</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/better-pcbuild') }}">Better</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/best-pcbuild') }}">Best</a></li>
        </ul>
      </div>
    </li> --}}

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/settings') }}">
        <i class="ti-settings menu-icon"></i>
        <span class="menu-title">Settings</span>
      </a>
    </li>
  </ul>
</nav>