<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mahasiswa</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand" style="background:#8ab6d6">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color:black"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-dark">Data Mahasiswa</a>
      </li> -->
    <!-- </ul> -->

    <!-- Right navbar links -->
    <!-- <ul class="navbar-nav ml-auto"> -->
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <div class="sidebar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
            <input name="cari" class="form-control" type="search" placeholder="Search by Name" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="box-refresh">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->
    <!-- </ul> -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style="background:#8ab6d6">
    <!-- Brand Logo -->
    <!-- <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">Statistik Ilmu Komputer</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template')}}/dist/img/dwi.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color:black">Dwi Prima</a> 
        </div>
      </div>

       <!-- Sidebar Search -->
        <!-- <div class="sidebar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
            <input name="cari" class="form-control" type="search" placeholder="Search by Name" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-sidebar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background:white">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="menu-open" style="color:#8ab6d6">
            <a href="/students" class="nav-link active">
              <i class="nav-icon fas fa-table" style="color:black"></i>
              <p class="text-dark">
                 Mahasiswa
                <i class="right fas fa-angle-left" style="color:black"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>  

      <nav class="mt-3">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background:white">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="menu-open" style="color:#8ab6d6">   
            <a href="/bergolong" class="nav-link active">
              <i class="nav-icon fas fa-table" style="color:black"></i>
              <p class="text-dark">
                 Data Bergolong
                <i class="right fas fa-angle-left" style="color:black"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>  

      <nav class="mt-3">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background:white">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="menu-open" style="color:#8ab6d6">
            <a href="/chikuadrat" class="nav-link active">
              <i class="nav-icon fas fa-table" style="color:black"></i>
              <p class="text-dark">
                 Chikuadrat
                <i class="right fas fa-angle-left" style="color:black"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-3">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background:white">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="menu-open" style="color:#8ab6d6">
            <a href="/lilliefors" class="nav-link active">
              <i class="nav-icon fas fa-table" style="color:black"></i>
              <p class="text-dark">
                 Lilliefors
                <i class="right fas fa-angle-left" style="color:black"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>

      <!-- <nav class="mt-3">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background:white">
          <li class="menu-open" style="color:#8ab6d6">
            <a href="/productmoment" class="nav-link active">
              <i class="nav-icon fas fa-table" style="color:black"></i>
              <p class="text-dark">
                 Product Moment
                <i class="right fas fa-angle-left" style="color:black"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav> -->

      <nav class="mt-3">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background:white">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="menu-open" style="color:#8ab6d6">
            <a href="/ujit" class="nav-link active">
              <i class="nav-icon fas fa-table" style="color:black"></i>
              <p class="text-dark">
                 Uji T
                <i class="right fas fa-angle-left" style="color:black"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-3">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="background:white">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="menu-open" style="color:#8ab6d6">
            <a href="/anava" class="nav-link active">
              <i class="nav-icon fas fa-table" style="color:black"></i>
              <p class="text-dark">
                 Uji Anava
                <i class="right fas fa-angle-left" style="color:black"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>


    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('judul')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    @yield('container')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>&copy; Statistika</strong>
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b></b> -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('template')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- <script src="{{asset('template')}}/plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<script src="{{asset('template')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('template')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<!-- <script src="{{asset('template')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{asset('template')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('template')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('template')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('template')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('template')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('template')}}/dist/js/pages/dashboard.js"></script>
</body>
</html>
