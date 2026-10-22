<?php include "../../templates/validate.php"; ?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>CONCORDE ADMIN</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
      <link rel="apple-touch-icon" sizes="180x180" href="../../../database/image/logo-only.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../../../database/image/logo-only.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../database/image/logo-only.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../database/image/logo-only.png">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../../../assets/css/theme-rtl.css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.css" rel="stylesheet" id="user-style-default">

    <?php if(isset($_GET['page']) || isset($_GET['edit']) || isset($_GET['add'])) { ?>
      <link rel="stylesheet" href="../css/pagination.css">
    <?php } ?>

    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>

    <style>
        .navbar-vertical {
            left: 30px !important;
        }
        
        /* 2. Hilangkan Margin Konten yang bikin desain kerasa "Sempit" */
        .content {
            padding-left: 3rem !important; /* Jarak dari navbar */
            width: 80vw !important; /* Paksa lebar penuh */
            margin: 0 !important;
        }
        
        /* 3. Jika kamu pakai Container-Fluid, pastikan paddingnya nol */
        .container-fluid {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        
        /* 4. Solusi Skala 90% (Karena kamu merasa nyaman di zoom 90%) */
        body {
            transform-origin: 0 0;
            overflow-x: hidden;
        }

        @media (max-width:1350px){
          .content {
            padding-left: 10rem !important;
            width: 90vw !important;
          }
        }

        @media (max-width:1200px){
          .content {
            padding-left: 0rem !important;
            width: 80vw !important;
          }
        }

        @media (max-width:575px){
          .content {
            width: 92vw !important;
          }
        }
    </style>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
  <script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
      document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
  </script>
  <div class="d-flex align-items-center">
    <div class="toggle-icon-wrapper">

      <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

    </div><a class="navbar-brand" href="#">
      <div class="d-flex align-items-center py-3"><img class="me-2" src="../../../database/image/logo-only.png" alt="" width="40" /><span class="font-sans-serif text-primary" style="font-size: 22px;">Concorde</span>
      </div>
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content scrollbar">
      <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
        <li class="nav-item">
          <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Sistem
            </div>
            <div class="col ps-0">
              <hr class="mb-0 navbar-vertical-divider" />
            </div>
          </div>
          <a class="nav-link" href="../../pengguna/php/pengguna.php?page=1">
            <div class="d-flex align-items-center"><span class="fas fa-users"></span><span class="nav-link-text ps-1">Pengguna</span>
            </div>
          </a>
          <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Konten
            </div>
            <div class="col ps-0">
              <hr class="mb-0 navbar-vertical-divider" />
            </div>
          </div>
          <a class="nav-link" href="../../editor/php/editor.php?page=1">
            <div class="d-flex align-items-center"><span class="fas fa-pen-square"></span><span class="nav-link-text ps-1">Editor</span>
            </div>
          </a>
          <a class="nav-link" href="../../galeri/php/galeri.php?page=1">
            <div class="d-flex align-items-center"><span class="fas fa-images"></span><span class="nav-link-text ps-1">Galeri</span>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="content">
  <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="#">
      <div class="d-flex align-items-center"><img class="me-2" src="../../../database/image/logo-only.png" alt="" width="40" /><span class="font-sans-serif text-primary" style="font-size: 22px;">Concorde</span>
      </div>
    </a>

    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
      <span><?= "Username: " . $_SESSION['Username'] ?></span>
      <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-xl">
            <img class="rounded-circle" src="../../../assets/img/team/3-thumb.png" alt="" />

          </div>
        </a>
        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
          <div class="bg-white dark__bg-1000 rounded-2 py-2">
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../../login/php/logout.php">Logout</a>
          </div>
        </div>
      </li>
    </ul>
</nav>