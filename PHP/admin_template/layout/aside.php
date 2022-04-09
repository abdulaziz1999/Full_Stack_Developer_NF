<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php?hal=dashboard">
        <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Profile</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $_REQUEST['hal'] == 'dashboard' ? 'active' : ''?>" href="index.php?hal=dashboard">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $_REQUEST['hal'] == 'pendidikan' ? 'active' : ''?>" href="index.php?hal=pendidikan">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-hat-3 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Education</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $_REQUEST['hal'] == 'profile' ? 'active' : ''?>" href="index.php?hal=profile">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $_REQUEST['hal'] == 'gallery' ? 'active' : ''?>" href="index.php?hal=gallery">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Gallery</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $_REQUEST['hal'] == 'contact' ? 'active' : ''?>" href="index.php?hal=contact">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Contact</span>
          </a>
        </li>
        <!-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li> -->
        
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="./assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <!-- <p class="text-xs font-weight-bold mb-0">Please check our docs</p> -->
          </div>
        </div>
      </div>
      <a href="#" class="btn btn-dark btn-sm w-100 mb-3">IT Consulting</a>
      <a href="#" class="btn btn-primary btn-sm mb-0 w-100" type="button">Create a Website</a>
    </div>
  </aside>