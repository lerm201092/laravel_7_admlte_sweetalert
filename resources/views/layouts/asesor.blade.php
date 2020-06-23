<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

  <title>GoVista S.A.S.</title>
  <!-- jQuery -->
  <script src="/js/app.js"></script>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/asesor.css">

  @yield('head')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav id="menu-top" class="main-header navbar navbar-expand bg-base text-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item font-weight-bold">
          <p class="nav-link mb-0 font-weight-bold">GOVISTA S.A.S.</p>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto  mr-3">
            <li class="nav-item d-none d-sm-inline-block" onclick="submenu();" ;="">
                <a href="javascript:void(0)" class="nav-link text-light font-weight-bold">
                    <span class="fa fa-user mr-3"></span>
                    {{ Auth::user()->nombre }}             
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/home" class="brand-link text-center mt-2">
        <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="img-responsive" style="opacity: .8; max-height: 45px;">
        <h6 class="mt-3" style="font-weight: 800">Asesor Comercial</h6>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2" >
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <li class="nav-item" id="li-resumen">
              <a href="{{ route('AsesorResumen') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Resumen
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview" id="li-medicos">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Medicos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('AsesorCitasListado') }}" class="nav-link">
                    <i class="fas fa-address-card nav-icon"></i>
                    <p>Citas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Historias Clinicas</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item" id="li-ejercicios">
              <a href="{{ route('AsesorEjerciciosListado') }}" class="nav-link">
                <i class="nav-icon fas fa-gamepad"></i>
                <p>
                  Ejercicios
                </p>
              </a>
            </li>
<!-- -->
            <li class="nav-item" id="li-cerrar">
              <a href="javascript:void(0)" onclick=" $('#ModalCerrarSession').modal('show')" class="nav-link">
                <i class="nav-icon fas fa-gamepad"></i>
                <p>
                  Cerrar sesión
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
      <!-- Content Header (Page header) -->   
      @yield('titulo')
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        @yield('content')
      </div>
      <!-- /.content -->
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

    <x-cerrar-session />

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->


  @include('sweet::alert')

  @yield('script')
</body>

</html>