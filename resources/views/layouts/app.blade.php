<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
<link rel="icon" type="image/png" href="{{ asset('assets') }}/img/icon1.png">
<title>
Cafe Bisa Ngopi
</title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->
<link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
<link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="{{ asset('assets') }}/css/material-dashboard.css" rel="stylesheet" />
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- jQuery UI --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css"> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/flick/jquery-ui.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/flick/theme.min.css">
</head>

<body class="g-sidenav-show  bg-gray-200">

    @auth
        
        <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
            <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#">
                {{-- <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> --}}
                <span class="font-weight-bold text-white" style="font-size: 1.5em">Cafe Bisa Ngopi</span>
                {{-- <img src="{{ asset('assets/img/icon1.png') }}" class="navbar-brand-img h-100" alt="main_logo"> --}}
                {{-- <span class="material-icons navbar-brand-img vh-100 text-white" style="font-size: 1.5em"> --}}
                {{-- </span> --}}
            </a>
            </div>
            <hr class="horizontal light mt-0 mb-2">
            <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
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
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">person</i>
          <span class="nav-link-text ms-1">User</span>
          </div>
          
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
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">menu_book</i>
            <span class="nav-link-text ms-1">Menu</span>  
          </div>
            </a>
          </li>
          <li class="{{ request()->is('manager/laporan') ? 'active' : '' }} nav-item">
            <a href="/manager/laporan">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
           <i class="material-icons opacity-10">summarize</i>
           <span class="nav-link-text ms-1">Laporan</span>
           </div>
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
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
            <span class="nav-link-text ms-1">Transaksi</span>
            </div>
             </a>
          </li>
    @endif

            </ul>
            </div>
            <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                {{-- <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a> --}}
            </div>
            </div>
        </aside>

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <span class="navbar-brand font-weight-bold" style="font-size: 2.5em">Cafe Bisa Ngopi </span>
            {{-- <img src="{{ asset('assets/img/icon1.png') }}" alt="logo" width="40" height="40"> --}}
            <div class="container-fluid py-1 px-3">
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">
                    <label class="form-label">Type here...</label>
                    <input type="text" class="form-control">
                </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                @auth()
                    @if(Auth::user()->role == 'admin')
                        <li title="Dashboard" class="nav-item d-flex align-items-center">
                        <a href="{{ route('admin.index') }}" class="nav-link text-body font-weight-bold px-0">
                            <i class="material-icons">account_circle</i>
                        </a>
                        </li>
                    @elseif(Auth::user()->role == 'kasir')
                        <li title="Dashboard" class="nav-item d-flex align-items-center">
                        <a href="{{ route('kasir.index') }}" class="nav-link text-body font-weight-bold px-0">
                            <i class="material-icons">account_circle</i>
                        </a>
                        </li>
                    @elseif(Auth::user()->role == 'manajer')
                        <li title="Dashboard" class="nav-item d-flex align-items-center">
                        <a href="" class="nav-link text-body font-weight-bold px-0">
                            <i class="material-icons">account_circle</i>
                        </a>
                        </li>
                @endif
                <li title="Home" class="nav-item d-flex p-2 align-items-center">
                    <a href="{{ url('/') }}" class="nav-link text-body font-weight-bold px-0">
                    <i class="material-icons">home</i>
                    </a>
                </li>
            @endauth
                
                <li class="nav-item d-xl-none d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body px-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                    </a>
                </li>
                {{-- <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                    <i class="material-icons fixed-plugin-button-nav cursor-pointer">settings</i>
                    </a>
                </li> --}}
                <li class="nav-item">
          <a class="nav-link" href="/logout">
          <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span></a>
        </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->

            <div class="container-fluid py-4">

                @yield('breadcrumb')
                @yield('content')

                <footer class="footer small text-end text-black-50"><div class="container px-4 px-lg-5">Copyright &copy; Cofe Ngopi Kuy 2022</div></footer>
            </div>
        </main>
    
          
    @endauth

    @guest
        @yield('content')
    @endguest

  <!--   Core JS Files   -->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  
  @stack('js')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  <script>
    @if (Session::has('success'))
      var msg = "{{ session('success') }}";
      Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: msg,
          timer: 3000,
          showConfirmButton: false,
      })
    @endif
    @if (Session::has('error'))
      var msg = "{{ session('error') }}";
      Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: msg,
          timer: 3000,
          showConfirmButton: false,
      })
    @endif
    @if (Session::has('warning'))
      var msg = "{{ session('warning') }}";
      Swal.fire({
          icon: 'warning',
          title: 'Warning!',
          text: msg,
          timer: 3000,
          showConfirmButton: false,
      })
    @endif
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
</body>

</html>