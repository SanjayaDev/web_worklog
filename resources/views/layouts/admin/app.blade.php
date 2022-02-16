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


  <nav class="sb-topnav navbar navbar-expand ">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Larees.id</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->

    <!-- toggle dark mode -->

    <!-- form search -->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                    class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#!">Settings</a></li>
                  <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                  <li>
                      <hr class="dropdown-divider" />
                  </li>
                  <li><a class="dropdown-item" href="#!">Logout</a></li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link dark-mode-toggle" id="dark-mode-toggle" aria-label="toggle dark mode">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox" />
                          <div class="slider round"></div>
                      </label>
                      <em>Darkmode</em>
                  </div>
              </a>

          </li>
      </ul>
  </nav>

  <div id="layoutSidenav">
      <!-- SIDEBAR LEFT -->
      <div id="layoutSidenav_nav">
          <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
              <div class="sb-sidenav-menu">
                  <div class="nav">
                      <div class="sb-sidenav-menu-heading">Core</div>
                      <ul>
                          <li class="active-list">
                              <a class="nav-link active" href="index.html">
                                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                  Dashboard
                              </a>
                          </li>


                          <li>

                              <div class="sb-sidenav-menu-heading">Interface</div>
                              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                  data-bs-target="#collapseLayouts" aria-expanded="false"
                                  aria-controls="collapseLayouts">
                                  <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                  Pages
                                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                  </div>
                              </a>
                              <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                                  data-bs-parent="#sidenavAccordion">
                                  <nav class="sb-sidenav-menu-nested nav">
                                      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                          data-bs-target="#pagesCollapseError" aria-expanded="false"
                                          aria-controls="pagesCollapseError">
                                          Error
                                          <div class="sb-sidenav-collapse-arrow"><svg
                                                  class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true"
                                                  focusable="false" data-prefix="fas" data-icon="angle-down"
                                                  role="img" xmlns="http://www.w3.org/2000/svg"
                                                  viewBox="0 0 320 512" data-fa-i2svg="">
                                                  <path fill="currentColor"
                                                      d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                  </path>
                                              </svg>

                                          </div>
                                      </a>
                                      <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                          data-bs-parent="#sidenavAccordionPages">
                                          <nav class="sb-sidenav-menu-nested nav">
                                              <a class="nav-link" href="component/Error/403_1.html">403 - 1
                                              </a>
                                              <a class="nav-link" href="component/Error/403_2.html">403 - 2
                                              </a>
                                              <a class="nav-link" href="component/Error/404_1.html">404 -
                                                  1</a>
                                              <a class="nav-link" href="component/Error/404_2.html">404 -
                                                  2</a>
                                              <a class="nav-link" href="component/Error/500_1.html">500 -
                                                  1</a>
                                              <a class="nav-link" href="component/Error/500_2.html">500 - 2
                                              </a>
                                          </nav>
                                      </div>

                                  </nav>
                                  <!-- autification -->
                                  <nav class="sb-sidenav-menu-nested nav">

                                      <div class="autofications-page">
                                          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                              data-bs-target="#pagesCollapseAutofications" aria-expanded="false"
                                              aria-controls="pagesCollapseAutofications">
                                              Auntification
                                              <div class="sb-sidenav-collapse-arrow"><svg
                                                      class="svg-inline--fa fa-angle-down fa-w-10"
                                                      aria-hidden="true" focusable="false" data-prefix="fas"
                                                      data-icon="angle-down" role="img"
                                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                      data-fa-i2svg="">
                                                      <path fill="currentColor"
                                                          d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                      </path>
                                                  </svg>
                                                  <!-- <i class="fas fa-angle-down"></i> Font Awesome fontawesome.com -->
                                              </div>
                                          </a>
                                          <div class="collapse" id="pagesCollapseAutofications"
                                              aria-labelledby="headingOne"
                                              data-bs-parent="#sidenavAccordionPages">
                                              <nav class="sb-sidenav-menu-nested nav">
                                                  <a class="nav-link" href="component/Pages/login.html">Login
                                                  </a>

                                                  <a class="nav-link"
                                                      href="component/Pages/register.html">Register
                                                  </a>
                                              </nav>
                                          </div>

                                      </div>
                                  </nav>
                                  <nav class="sb-sidenav-menu-nested nav">
                                      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                          data-bs-target="#pagesCollapseTabel" aria-expanded="false"
                                          aria-controls="pagesCollapseTabel">
                                          Table
                                          <div class="sb-sidenav-collapse-arrow"><svg
                                                  class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true"
                                                  focusable="false" data-prefix="fas" data-icon="angle-down"
                                                  role="img" xmlns="http://www.w3.org/2000/svg"
                                                  viewBox="0 0 320 512" data-fa-i2svg="">
                                                  <path fill="currentColor"
                                                      d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                  </path>
                                              </svg>

                                          </div>
                                      </a>
                                      <div class="collapse" id="pagesCollapseTabel" aria-labelledby="headingOne"
                                          data-bs-parent="#sidenavAccordionPages">
                                          <nav class="sb-sidenav-menu-nested nav">
                                              <a class="nav-link" href="component/Table/table.html">Table</a>
                                          </nav>
                                      </div>

                                  </nav>
                                  <!-- Modal -->
                                  <nav class="sb-sidenav-menu-nested nav">
                                      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                          data-bs-target="#pagesCollapseModal" aria-expanded="false"
                                          aria-controls="pagesCollapseModal">
                                          Modal
                                          <div class="sb-sidenav-collapse-arrow"><svg
                                                  class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true"
                                                  focusable="false" data-prefix="fas" data-icon="angle-down"
                                                  role="img" xmlns="http://www.w3.org/2000/svg"
                                                  viewBox="0 0 320 512" data-fa-i2svg="">
                                                  <path fill="currentColor"
                                                      d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                  </path>
                                              </svg>

                                          </div>
                                      </a>
                                      <div class="collapse" id="pagesCollapseModal" aria-labelledby="headingOne"
                                          data-bs-parent="#sidenavAccordionPages">
                                          <nav class="sb-sidenav-menu-nested nav">
                                              <a class="nav-link" href="component/Modal/modal.html">Modal</a>
                                          </nav>
                                      </div>

                                  </nav>

                              </div>
                          </li>


                          <li>

                              <div class="sb-sidenav-menu-heading">Example</div>
                              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                  data-bs-target="#collapseExampleLink" aria-expanded="false"
                                  aria-controls="collapseExampleLink">
                                  <div class="sb-nav-link-icon"><i class="fas fa-link"></i></div>
                                  Example Link
                                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                  </div>
                              </a>
                              <div class="collapse" id="collapseExampleLink" aria-labelledby="headingOne"
                                  data-bs-parent="#sidenavAccordion">



                                  <a href="index.html" class="nav-link">
                                      <div class="sb-nav-link-icon child">
                                          <i class="fab fa-think-peaks"></i>
                                      </div>
                                      Example Link Icon
                                  </a>
                              </div>
                          </li>
                      </ul>

                  </div>
              </div>
              <div class="sb-sidenav-footer">
                  <div class="small">Logged in as:</div>
                  Larees.id
              </div>
          </nav>
      </div>

      <!--  DASHBOARD BODY  CONTENT-->
      <div id="layoutSidenav_content">
          <!-- CONTENT HERE START -->
          <main>
              <div class="container-fluid px-5 mt-4">
                  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="bredcrumb-wrapper">
                      <h5>OBAT KECOA - BASMI KECOA - ANTI KECOA SEMPROT ISI 250 ML</h5>
                      <nav aria-label="breadcrumb my-5">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"
                                  onclick="Bargros.navigateBreadcrumb('https://bargros.id/reseller/products?')"><a
                                      href="#">Product Management</a></li>
                              <li class="breadcrumb-item active">OBAT KECOA - BASMI KECOA - ANTI KECOA SEMPROT ISI
                                  250 ML</li>
                          </ol>
                      </nav>
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