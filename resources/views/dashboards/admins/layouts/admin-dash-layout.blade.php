<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <base href="{{ \URL::to('/')}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-ellipsis-h"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="overflow: auto; height: 300px;">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            @foreach($users as $user)
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  {{$user['name']}}
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">{{$user['email']}}</p>
                @if($user->id != $max)
                  <hr color="black">
                @endif
              </div>
            </div>
            @endforeach
            <!-- Message End -->
          </a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Linia lotnicza</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a  class="d-block">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{ route('admin.dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Panel g????wny
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('admin.profiles')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profil
              </p>
            </a>
          </li>

          
          <hr style="width:100%;text-align:left;margin-left:0;color:white;background-color:white;">
          

          <li class="nav-item">
            <a href="{{ route('admin.manage_employees')}}" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p style="font-size: 15px;">
                Zarz??dzanie pracownikami
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.manage_airports')}}" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Zarz??dzanie lotniskami
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.manage_aircrafts')}}" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Zarz??dzanie samolotami
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.manage_salaries')}}" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Zarz??dzanie wyp??atami
              </p>
            </a>
          </li>

          <hr style="width:100%;text-align:left;margin-left:0;color:white;background-color:white;">

          <li class="nav-item">
            <a href="{{ route('admin.schedule_flights')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Zarz??dzanie harmonogramem lotu
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.schedule_works')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Zarz??dzanie harmonogramem pracy
              </p>
            </a>
          </li>

          <hr style="width:100%;text-align:left;margin-left:0;color:white;background-color:white;">

          <li class="nav-item">
            <a href="{{ route('admin.message_offices')}}" class="nav-link">
              <i class="fas fa-envelope"></i>
              <p>
                Skrzynka pocztowa
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
