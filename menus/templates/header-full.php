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
    <title>MOBO ID SYSTEMS</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
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

    </div><a class="navbar-brand" href="index.html">
      <div class="d-flex align-items-center py-3"><img class="me-2" src="../../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">MOBO ID</span>
      </div>
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content scrollbar">
      <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
        
        <li class="nav-item">
          <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span>
            </div>
          </a>
          <ul class="nav collapse show" id="dashboard">
            <li class="nav-item"><a class="nav-link active" href="../../dashboard/php/monitoring.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Monitoring</span>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Penjualan
            </div>
            <div class="col ps-0">
              <hr class="mb-0 navbar-vertical-divider" />
            </div>
          </div>

          <a class="nav-link" href="../../kasir/php/pos.php" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-cash-register"></span></span><span class="nav-link-text ps-1">Kasir (POS)</span>
            </div>
          </a>

          <a class="nav-link dropdown-indicator" href="#outbound" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="outbound">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-paper-plane"></span></span><span class="nav-link-text ps-1">Penjualan Grosir</span>
            </div>
          </a>
          <ul class="nav collapse" id="outbound">
            <li class="nav-item"><a class="nav-link" href="../../penjualan-grosir/php/sales_order.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sales Order (SO)</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../penjualan-grosir/php/do.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Surat Jalan (DO)</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../penjualan-grosir/php/packing.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Picking & Packing</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../penjualan-grosir/php/shipping.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shipping</span>
                </div>
              </a>
            </li>
             <li class="nav-item"><a class="nav-link" href="../../penjualan-grosir/php/faktur_penjualan.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faktur Penjualan</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../penjualan-grosir/php/retur_penjualan.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Retur Penjualan</span>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Pembelian & Gudang
            </div>
            <div class="col ps-0">
              <hr class="mb-0 navbar-vertical-divider" />
            </div>
          </div>

          <a class="nav-link dropdown-indicator" href="#inbound" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="inbound">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-truck-loading"></span></span><span class="nav-link-text ps-1">Pembelian (Inbound)</span>
            </div>
          </a>
          <ul class="nav collapse" id="inbound">
            <li class="nav-item"><a class="nav-link" href="../../pembelian/php/po.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Purchase Order (PO)</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../pembelian/php/receiving.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Penerimaan Barang</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../pembelian/php/faktur_pembelian.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faktur Pembelian</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../pembelian/php/retur.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Retur Pembelian</span>
                </div>
              </a>
            </li>
          </ul>

          <a class="nav-link dropdown-indicator" href="#inventory" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="inventory">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Inventaris (Gudang)</span>
            </div>
          </a>
          <ul class="nav collapse" id="inventory">
             <li class="nav-item"><a class="nav-link" href="../../inventaris/php/putaway.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Put Away</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../inventaris/php/stock_view.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stock Overview</span>
                </div>
              </a>
            </li>
             <li class="nav-item"><a class="nav-link" href="../../inventaris/php/kartu_stok.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kartu Stok</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../inventaris/php/stock_opname.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stock Opname</span>
                </div>
              </a>
            </li>
             <li class="nav-item"><a class="nav-link" href="../../inventaris/php/transfer_stok.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Transfer Stok</span>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Administrasi
            </div>
            <div class="col ps-0">
              <hr class="mb-0 navbar-vertical-divider" />
            </div>
          </div>

          <a class="nav-link dropdown-indicator" href="#keuangan" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="keuangan">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wallet"></span></span><span class="nav-link-text ps-1">Keuangan</span>
            </div>
          </a>
          <ul class="nav collapse" id="keuangan">
             <li class="nav-item"><a class="nav-link" href="../../keuangan/php/kas_bank.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kas & Bank</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../keuangan/php/hutang.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hutang Usaha</span>
                </div>
              </a>
            </li>
             <li class="nav-item"><a class="nav-link" href="../../keuangan/php/piutang.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Piutang Usaha</span>
                </div>
              </a>
            </li>
          </ul>
          
          <a class="nav-link dropdown-indicator" href="#master" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="master">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-layer-group"></span></span><span class="nav-link-text ps-1">Data Master</span>
            </div>
          </a>
          <ul class="nav collapse" id="master">
            <li class="nav-item"><a class="nav-link" href="../../data-master/php/item_sku.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data Barang (SKU)</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../data-master/php/supplier.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data Supplier</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../data-master/php/customer.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data Pelanggan</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../data-master/php/lokasi.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data Lokasi</span>
                </div>
              </a>
            </li>
          </ul>

          <a class="nav-link dropdown-indicator" href="#report" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="report">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text ps-1">Laporan</span>
            </div>
          </a>
          <ul class="nav collapse" id="report">
            <li class="nav-item"><a class="nav-link" href="../../laporan/php/report_penjualan.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Laporan Penjualan</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../laporan/php/report_inbound.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Laporan Pembelian</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../laporan/php/report_stock.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Laporan Stok</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../laporan/php/report_keuangan.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Laporan Keuangan</span>
                </div>
              </a>
            </li>
          </ul>

          <a class="nav-link dropdown-indicator" href="#settings" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="settings">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-cog"></span></span><span class="nav-link-text ps-1">Pengaturan</span>
            </div>
          </a>
          <ul class="nav collapse" id="settings">
            <li class="nav-item"><a class="nav-link" href="../../pengaturan/php/user.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Manajemen User</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../../pengaturan/php/pengaturan_toko.php">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pengaturan Toko</span>
                </div>
              </a>
            </li>
          </ul>

        </li>
      </ul>
    </div>
  </div>
</nav>

          <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.php">
              <div class="d-flex align-items-center"><img class="me-2" src="../../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">moboid</span>
              </div>
            </a>
          
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item ps-2 pe-0">
                <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                      <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                      <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                      <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                    </div>
                  </div>
                </div>
              </li>
            
           
                 
              <li class="nav-item dropdown px-1">
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                  <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                      <div class="card-body px-3">
                        <div class="row text-center gx-0 gy-0">
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="pages/user/profile.html" target="_blank">
                              <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../../assets/img/team/3.jpg" alt="" /></div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                            </a></div>
              
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                            </a></div>
                
                          <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </li>
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