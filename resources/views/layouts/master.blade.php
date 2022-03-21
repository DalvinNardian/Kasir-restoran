<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PERPUSKITA</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="{{ asset('assets/js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="background-color: blue;">PERPUSTAKAAN</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php echo date('d-M-Y'); ?> &nbsp; <a href="logout.php" class="btn btn-primary square-btn-adjust">Logout</a> </div>
        </nav>   
            <!-- Nav Item - Pages Collapse Menu -->
                {{-- feature if user have role Admin --}}
                @if (auth()->user()->role == 'Admin')

                <li class="{{ request()->is('manager') ? 'active' : '' }} nav-item">
                    <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard {{ Auth::user()->role }}</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Data
                </div>

                    <li class="{{ request()->is('admin') ? 'active' : '' }} nav-item">
                        <a class="nav-link collapsed" href="{{ route('admin.index') }}">
                            <i class="fas fa-user"></i>
                            <span>User</span>
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

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Data
                </div>

                    <li class="{{ request()->is('manager/menu') ? 'active' : '' }} nav-item">
                        <a class="nav-link collapsed" href="{{ route('menu.index') }}">
                            <i class="fa-solid fa-utensils"></i>
                            <span>Menu</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('manager/laporan') ? 'active' : '' }} nav-item">
                        <a class="nav-link collapsed" href="/manager/laporan">
                            <i class="fa-solid fa-file-lines"></i>
                            <span>Laporan</span>
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

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Data
                </div>
                    <li class="{{ request()->is('kasir') ? 'active' : '' }} nav-item">
                        <a class="nav-link collapsed" href="{{ route('kasir.index') }}">
                            <i class="fa-solid fa-file-invoice"></i>
                            <span>Transaksi</span>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="/logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span></a>
                </li>

                 <!-- /. ROW  -->
                 <hr />
               
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->
    


    <script src="{{ asset('assets/js/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/dataTables.bootstrap.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Main Content -->
    <div id="content">
        <br>
        <div class="container">
          <section class="content">
            @yield('content')
          </section>
        </div>
      </div>
      <!-- End of Main Content -->
     
</body>
</html>