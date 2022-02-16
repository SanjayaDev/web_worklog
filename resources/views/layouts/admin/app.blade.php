<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

  <title>{{ $title ?? "Home" }} - Worklog Bargros ID</title>
</head>
<body class="sb-nav-fixed" data-theme>

  <div class="parent-loader d-none">
      <div class="container">
          <span class="circle"></span>
          <span class="circle"></span>
          <span class="circle"></span>
          <span class="circle"></span>
      </div>
      <h2 class="animate-text-loader">Loading</h2>
  </div>

  @include('layouts.admin.navbar')

  <div id="layoutSidenav">
      <!-- SIDEBAR LEFT -->
      @include('layouts.admin.sidenav')

      <!--  DASHBOARD BODY  CONTENT-->
      <div id="layoutSidenav_content">
          <!-- CONTENT HERE START -->
          <main>
              <div class="container-fluid px-5 mt-4">
                  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="bredcrumb-wrapper">
                      <h5>{{ $title ?? "Home" }}</h5>
                      {{-- <nav aria-label="breadcrumb my-5">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"
                                  onclick="Bargros.navigateBreadcrumb('https://bargros.id/reseller/products?')"><a
                                      href="#">Product Management</a></li>
                              <li class="breadcrumb-item active"></li>
                          </ol>
                      </nav> --}}
                  </nav>

                  @yield('content')
                  
              </div>

          </main>
          <!-- CONTENT HERE END -->

          <!-- FOOTER  -->
          <footer class="py-4">
              <div class="container-fluid px-5">
                  <div class="d-flex align-items-center justify-content-between small">
                      <div class="text-muted">Copyright &copy; Your Website 2021</div>
                      <div>
                          <a href="#">Privacy Policy</a>
                          &middot;
                          <a href="#">Terms &amp; Conditions</a>
                      </div>
                  </div>
              </div>
          </footer>
      </div>
  </div>
  

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>