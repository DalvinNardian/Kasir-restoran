<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Cafe Ngopi Kuy
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Cafe
        <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <!--Menu -->
      <div class="sidebar-wrapper">  
            <!-- Nav Item - Pages Collapse Menu -->
    {{-- feature if user have role Admin --}}
    @if (auth()->user()->role == 'Admin')   

    <li class="{{ request()->is('admin') ? 'active' : '' }} nav-item">
        <a class="nav-link" href="/dashboardA">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard {{ Auth::user()->role }}</span></a>
    </li>
     
        <ul class="nav">
          <li class="{{ request()->is('admin') ? 'active' : '' }} nav-item">
            <a href="{{ route('admin.index') }}">
              <i class="nc-icon nc-single-02"></i>
              <p>User</p>
            </a>
          </li>
    @endif

    {{-- feature if user have role Manager --}}
    @if (auth()->user()->role == 'Manager')

        <li class="{{ request()->is('manager') ? 'active' : '' }} nav-item">
                    <a class="nav-link" href="/dashboardM">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard {{ Auth::user()->role }}</span></a>
                </li>
          <li class="{{ request()->is('manager/menu') ? 'active' : '' }} nav-item">
            <a href="{{ route('menu.index') }}">
              <i class="fa-solid fa-utensils"></i>
              <p>Menu</p>
            </a>
          </li>
          <li class="{{ request()->is('manager/laporan') ? 'active' : '' }} nav-item">
            <a href="/manager/laporan">
              <i class="fa-solid fa-file-lines"></i>
              <p>Laporan</p>
            </a>
          </li>
    @endif
    
    {{-- feature if user have role Kasir --}}
    @if (auth()->user()->role == 'Kasir')

    <li class="{{ request()->is('manager') ? 'active' : '' }} nav-item">
                    <a class="nav-link" href="/dashboardK">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard {{ Auth::user()->role }}</span></a>
                </li>
          <li class="{{ request()->is('kasir') ? 'active' : '' }} nav-item">
            <a href="{{ route('kasir.index') }}">
              <i class="fa-solid fa-file-invoice"></i>
              <p>Transaksi</p>
            </a>
          </li>
    @endif
      
      </div>
    </div>
    <div class="main-panel">

      <!-- Main Content -->
      
      @yield('content')

      <!-- End Content -->

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
