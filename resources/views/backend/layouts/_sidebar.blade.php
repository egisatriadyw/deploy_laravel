  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ url('public/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->


      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="{{ url('public/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Personal Portfolio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public/assets/imgs/'.@$homeRecord[0]->profile) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ @$homeRecord[0]->your_name}}</a>
        </div>
      </div> --}}



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('admin/dashboard')}}" class="nav-link @if(
                Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>



          <li class="nav-item">
            <a href="{{ url('admin/home')}}" class="nav-link @if(
                Request::segment(2) == 'home') active @endif">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/about')}}" class="nav-link @if(
                Request::segment(2) == 'about') active @endif">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                About
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/education')}}" class="nav-link @if(
                Request::segment(2) == 'service') active @endif">
              <i class="nav-icon fa fa-server"></i>
              <p>
                Education
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/portfolio')}}" class="nav-link @if(
                Request::segment(2) == 'portfolio') active @endif">
              <i class="nav-icon fa fa-briefcase"></i>
              <p>
                Portfolio
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/experience')}}" class="nav-link @if(
                Request::segment(2) == 'experience') active @endif">
              <i class="nav-icon fa fa-quote-left"></i>
              <p>
                Experience
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/skill')}}" class="nav-link @if(
                Request::segment(2) == 'skill') active @endif">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Skill
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/galeri')}}" class="nav-link @if(
                Request::segment(2) == 'galeri') active @endif">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('logout')}}" class="nav-link @if(
                Request::segment(2) == 'logout') active @endif">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>