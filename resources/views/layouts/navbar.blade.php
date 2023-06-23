<header id="header" class="header fixed-top d-flex align-items-center bg-light">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/cuteslogo.png" alt="">
        {{-- <span class="d-none d-lg-block"Cutes Camerab</span> --}}
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        {{-- <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon--> --}}

        {{-- <li class="nav-item dropdown">
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <hr class="dropdown-divider">
            </li>
          </ul><!-- End Notification Dropdown Items -->
        </li><!-- End Notification Nav --> --}}

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle"  alt="Profile" class="rounded-circle "></i>
            <span class="d-none d-md-block ps-2">Hai {{Auth::user()->email}}!</span>
          </a><!-- End Profile Iamge Icon -->

          {{-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            {{-- <li class="dropdown-header">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h6>Tami</h6>
              <span>Mahasiswa</span>
            </li> --}}
            {{-- <li>
              <hr class="dropdown-divider">--}}
            </li>  

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href= "{{route('actionlogout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav --> --}}

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>