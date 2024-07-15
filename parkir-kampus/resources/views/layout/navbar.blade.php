 <!-- Navbar Start -->
 <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
     <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
         <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
     </a>
     <a href="#" class="sidebar-toggler flex-shrink-0">
         <i class="fa fa-bars"></i>
     </a>
     <form class="d-none d-md-flex ms-4">
         <input class="form-control border-0" type="search" placeholder="Search">
     </form>

     <div class="navbar-nav align-items-center ms-auto">
         <div class="nav-item dropdown">
             <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" id="navbarDropdown"
                 role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <i class="bi bi-person-circle rounded-circle me-lg-2 fs-4"></i>
                 <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
             </a>
             <ul class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0"
                 aria-labelledby="navbarDropdown">
                 <li>
                     <hr class="dropdown-divider">
                 </li>
                 <li class="text-muted text-center mt-1">{{ Auth::user()->role == 'admin' ? 'Admin' : 'User' }}</li>
                 <li>
                     <form action="{{ route('logout') }}" method="POST">
                         @csrf
                         <button type="submit" class="dropdown-item text-center">Log Out</button>
                     </form>
                 </li>
             </ul>
         </div>

     </div>

 </nav>
 <!-- Navbar End -->
