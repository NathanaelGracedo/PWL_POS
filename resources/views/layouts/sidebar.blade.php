<div class="sidebar">
    <!-- SidebarSearch Form -->
      <!-- Profile Section at the Bottom -->
      <div class="user-profile mt-3 text-center" style="width: calc(100% - 1rem);">
        <a href="{{ url('/profile') }}" class="nav-link d-flex align-items-center justify-content-center {{ ($activeMenu == 'profile')? 'active' : '' }}" style="gap: 1rem; text-align: left;">
            <img src="{{ Auth::user()->profile_picture ? asset('uploads/profile/' . Auth::user()->profile_picture) : asset('profile.png') }}" class="img-circle elevation-2" alt="User Image" style="width: 65px; height: 65px;">
            <p class="m-0">Hallo!! {{ Auth::user()->nama }}</p>
        </a>
    </div>
    
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">Opsi</li>
        <li class="nav-item">
          <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'dashboard') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/logout') }}" class="nav-link {{ ($activeMenu == 'logout') ? 'active' : ''}}">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
        </li>
        <li class="nav-header">Data Pengguna</li>
        <li class="nav-item">
          <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level') ? 'active' : ''}}">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>Level User</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user') ? 'active' : ''}}">
            <i class="nav-icon far fa-user"></i>
            <p>Data User</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/supplier') }}" class="nav-link {{ ($activeMenu == 'supplier') ? 'active' : ''}}">
            <i class="nav-icon fas fa-truck"></i>
            <p>Supplier</p>
          </a>
        </li>
        <li class="nav-header">Data Barang</li>
        <li class="nav-item">
          <a href="{{ url('/kategori') }}" class="nav-link {{ ($activeMenu == 'kategori') ? 'active' : ''}}">
            <i class="nav-icon far fa-bookmark"></i>
            <p>Kategori Barang</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/barang') }}" class="nav-link {{ ($activeMenu == 'barang') ? 'active' : ''}}">
            <i class="nav-icon far fa-list-alt"></i>
            <p>Data Barang</p>
          </a>
        </li>
        <li class="nav-header">Data Transaksi</li>
        <li class="nav-item">
          <a href="{{ url('/stok') }}" class="nav-link {{ ($activeMenu == 'stok') ? 'active' : ''}}">
            <i class="nav-icon fas fa-cubes"></i>
            <p>Stok Barang</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/penjualan') }}" class="nav-link {{ ($activeMenu == 'penjualan') ? 'active' : ''}}">
            <i class="nav-icon fas fa-cash-register"></i>
            <p>Transaksi Penjualan</p>
          </a>
        </li>
      
      </ul>
    </nav>
   
  </div>