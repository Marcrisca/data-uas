<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">NF PARKING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/avatar3.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">FARAH ADMIN</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Kelola Database</li>
          <li class="nav-item">
            <a href="{{ route('kendaraan') }}" class="nav-link">
              <i class="fas fa-car nav-icon"></i>
              <p>Kelola Data Kendaraan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('kampus') }}" class="nav-link">
              <i class="fas fa-university nav-icon"></i>
              <p>Kampus</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('areaparkir') }}" class="nav-link">
              <i class="fas fa-parking nav-icon"></i>
              <p>Area Parkir</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('transaksi') }}" class="nav-link">
              <i class="fas fa-money-check-alt nav-icon"></i>
              <p>Transaksi</p>
            </a>
          </li>
          <li class="nav-header">AUTENTIKASI</li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-door-closed nav-icon"></i>
              <p>Logout</p>
            </a>
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
