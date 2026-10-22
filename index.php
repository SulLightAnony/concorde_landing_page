<?php
    include "menus/templates/connection.php";
    $query = mysqli_query($conn, "SELECT * FROM editor");
    while ($row = mysqli_fetch_assoc($query)) {
        $contents[$row['ID']] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT CONCORDE ELBE PRAYA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="database/image/logo-only.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Accordion Custom Styling */
        .accordion-button {
            font-weight: 600;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
        }

        .accordion-button:not(.collapsed) {
            background-color: #e7f1ff;
            color: #0d6efd;
            border-color: #0d6efd;
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            border-color: #0d6efd;
        }

        /* Pastikan ada di style.css */
        @keyframes pulse-glow {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
            }
        }

        .pulse-btn {
            animation: pulse-glow 2s infinite;
            position: relative;
            z-index: 1;
        }

        .pulse-btn:hover {
            animation: none;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Gallery Styles */
        .gallery-item {
            transition: all 0.3s ease;
            opacity: 1;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(13, 110, 253, 0.85);
            display: flex;
            align-items: flex-end;
            opacity: 0;
            transition: opacity 0.3s ease;
            padding: 20px;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* Zoom Cursor */
        .cursor-zoom {
            cursor: zoom-in;
        }

        /* Filter Button Active */
        .btn-outline-primary.active {
            background-color: #0d6efd;
            color: white;
        }

        /* Modal Fullscreen Image */
        .modal-content {
            background: transparent;
            border: none;
        }

        .modal-header {
            background: rgba(0,0,0,0.7);
            color: white;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .btn-close {
            filter: invert(1);
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block" id="Beranda">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i><?= $contents[23]['Isi'] ?></small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><?= $contents[24]['Isi'] ?> / <?= $contents[25]['Isi'] ?></small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i><?= $contents[26]['Isi'] ?></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="#Beranda" class="navbar-brand p-0 d-flex align-items-center">
                <img loading="lazy" 
                    src="database/image/logo-only.png" 
                    alt="Logo PT CONCORDE ELBE PRAYA"
                    class="logo-img me-2"
                    style="width: 60px;">
                
                <!-- Nama perusahaan dengan responsive font size -->
                <div class="d-flex flex-column">
                    <span class="company-name fw-bold" style="font-size: 1.1rem; line-height: 1.2;">
                        PT CONCORDE
                    </span>
                    <span class="company-subname" style="font-size: 0.85rem; line-height: 1;">
                        ELBE PRAYA
                    </span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#Beranda" class="nav-item nav-link">Beranda</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu m-0">
                            <a href="#Profil" class="dropdown-item">Profil</a>
                            <a href="#SiapaKami" class="dropdown-item">Siapa Kami</a>
                            <a href="#VisiMisi" class="dropdown-item">Visi & Misi</a>
                            <a href="#StandarK3Komitmen" class="dropdown-item">Standar, K3, dan Komitmen</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                        <div class="dropdown-menu m-0">
                            <a href="#Layanan" class="dropdown-item">Layanan</a>
                            <a href="#SolusiTerintegrasi" class="dropdown-item">Solusi Terintegrasi</a>
                            <a href="#Industri" class="dropdown-item">Industri</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Infrastruktur</a>
                        <div class="dropdown-menu m-0">
                            <a href="#Infrastruktur" class="dropdown-item">Infrastruktur</a>
                            <a href="#Galeri" class="dropdown-item">Galeri</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Proyek</a>
                        <div class="dropdown-menu m-0">
                            <a href="#Proyek" class="dropdown-item">Proyek</a>
                            <a href="#Struktur" class="dropdown-item">Struktur</a>
                            <a href="#Kemitraan" class="dropdown-item">Kemitraan</a>
                        </div>
                    </div>

                    <a href="#Kontak" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img loading="lazy" class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?= $contents[6]['Isi'] ?></h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?= $contents[7]['Isi'] ?></h1>
                            <a href="#Layanan" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Layanan</a>
                            <a href="#Kontak" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Hubungi kami</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img loading="lazy" class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?= $contents[8]['Isi'] ?></h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?= $contents[9]['Isi'] ?></h1>
                            <a href="#Layanan" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Layanan</a>
                            <a href="#Kontak" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Hubungi kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Facts Start -->
    <!-- <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts Start -->

    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="Profil">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pilar Utama</h5>
                <h1 class="mb-0"><?= $contents[10]['Isi'] ?></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-microchip text-white"></i>
                            </div>
                            <h4><?= $contents[11]['Isi'] ?></h4>
                            <p class="mb-0"><?= $contents[12]['Isi'] ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-sync-alt text-white"></i>
                            </div>
                            <h4><?= $contents[13]['Isi'] ?></h4>
                            <p class="mb-0"><?= $contents[14]['Isi'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img loading="lazy" class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="database/image/image-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-industry text-white"></i>
                            </div>
                            <h4><?= $contents[15]['Isi'] ?></h4>
                            <p class="mb-0"><?= $contents[16]['Isi'] ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-bolt text-white"></i>
                            </div>
                            <h4><?= $contents[17]['Isi'] ?></h4>
                            <p class="mb-0"><?= $contents[18]['Isi'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="SiapaKami">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Siapa Kami</h5>
                        <h1 class="mb-0"><?= $contents[19]['Isi'] ?></h1>
                    </div>
                    <p class="mb-4"><?= $contents[20]['Isi'] ?></p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?= $contents[11]['Isi'] ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?= $contents[13]['Isi'] ?></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?= $contents[15]['Isi'] ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?= $contents[17]['Isi'] ?></h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Ada pertanyaan? Hubungi kami!</h5>
                            <h4 class="text-primary mb-0"><?= $contents[24]['Isi'] ?> / <?= $contents[25]['Isi'] ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img loading="lazy" class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="database/image/image-2.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Visi Misi Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="VisiMisi">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Visi dan Misi</h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: calc(650px - 15vw);">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Visi</h4>
                        <p class="m-0"><?= $contents[21]['Isi'] ?><br><br><br><br></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center" style="height: calc(650px - 15vw);">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Misi</h4>
                        <p class="m-0"><?= htmlspecialchars_decode($contents[22]['Isi']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi Misi End -->

    <!-- Standar Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="StandarK3Komitmen">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Standar, K3, dan Komitmen Mutu</h5>
                <h1 class="mb-0">Keselamatan, Mutu, dan Kepatuhan adalah Prioritas</h1>
            </div>

            <div class="row g-0 mb-3 text-center">
                <h4>Kami percaya bahwa hasil terbaik hanya dapat dicapai dengan budaya kerja yang disiplin dan bertanggung jawab.</h4>
            </div>

            <br>

            <div class="row g-0 mb-3">
                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Penerapan prinsip Keselamatan dan Kesehatan Kerja (K3)</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Pengendalian mutu pada setiap tahapan pekerjaan</h5>
                </div>
                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Kepatuhan terhadap regulasi dan standar teknis</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Dokumentasi dan pelaporan proyek yang transparan</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Standar End -->

    <!-- LAYANAN Section Start -->
    <div id="Layanan"></div>

    <!-- Kapabilitas Inti Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="KapabilitasInti">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Layanan Kami</h5>
                <h1 class="mb-0">Kapabilitas Teknis yang Dibangun untuk Proyek Nyata</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: calc(750px - 15vw);">
                        <div class="service-icon">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h4 class="mb-3">Penyediaan Sumber Daya Manusia & Manajemen SDM</h4>
                        <p class="m-0">• Penyediaan tenaga kerja sesuai kebutuhan operasional klien<br>• Pengelolaan fungsi SDM dan administrasi ketenagakerjaan<br>• Dukungan operasional berbasis kepatuhan regulasi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: calc(750px - 15vw);">
                        <div class="service-icon">
                            <i class="fa fa-cogs text-white"></i>
                        </div>
                        <h4 class="mb-3">Jasa Penunjang Operasional & Fasilitas</h4>
                        <p class="m-0">• Fabrikasi baja dan struktur industri<br>• Manufaktur komponen presisi<br>• Pengerjaan machining manual dan CNC<br>• Layanan kebersihan bangunan dan area industri<br>• Pengendalian vektor dan lingkungan kerja<br>• Pemeliharaan taman dan area fasilitas</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: calc(750px - 15vw);">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Layanan Keamanan & Pengamanan</h4>
                        <p class="m-0">• Pekerjaan konstruksi industri dan infrastruktur<br>• Instalasi mekanikal dan peralatan proses<br>• Koordinasi lintas disiplin di lapangan<br>• Penyediaan tenaga pengamanan (security services)<br>• Sistem pengamanan berbasis SOP dan standar keselamatan<br>• Dukungan keamanan untuk fasilitas dan area operasional</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kapabilitas Inti End -->

    <!-- Solusi Terintegrasi Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="SolusiTerintegrasi">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Solusi Terintegrasi</h5>
                <h1 class="mb-0">Satu Mitra untuk Seluruh Siklus Proyek</h1>
            </div>
            
            <div class="row g-0 mb-5 text-center">
                <p class="lead">Kami memahami bahwa proyek industri tidak berdiri sendiri. Oleh karena itu, PT CONCORDE ELBE PRAYA menawarkan solusi terintegrasi yang mencakup seluruh tahapan proyek, meminimalkan risiko koordinasi, meningkatkan efisiensi biaya, dan memastikan kualitas yang konsisten dari awal hingga akhir.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                    <div class="bg-primary text-white rounded p-4 text-center" style="min-height: 180px;">
                        <div class="d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                            <i class="fa fa-search fa-2x"></i>
                        </div>
                        <h5 class="text-white">Survey & Assessment</h5>
                        <p class="mb-0">Evaluasi kebutuhan dan kelayakan proyek</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-4 text-center" style="min-height: 180px;">
                        <div class="d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                            <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                        </div>
                        <h5>Engineering & Design</h5>
                        <p class="mb-0">Perancangan teknis berbasis standar industri</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                    <div class="bg-primary text-white rounded p-4 text-center" style="min-height: 180px;">
                        <div class="d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                            <i class="fa fa-industry fa-2x"></i>
                        </div>
                        <h5 class="text-white">Fabrikasi & Produksi</h5>
                        <p class="mb-0">Manufaktur komponen dan struktur</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <div class="bg-light rounded p-4 text-center" style="min-height: 180px;">
                        <div class="d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                            <i class="fa fa-tools fa-2x text-primary"></i>
                        </div>
                        <h5>Instalasi & Commissioning</h5>
                        <p class="mb-0">Pemasangan dan pengujian sistem</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary text-white rounded p-4 text-center" style="min-height: 180px;">
                        <div class="d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; margin: 0 auto;">
                            <i class="fa fa-wrench fa-2x"></i>
                        </div>
                        <h5 class="text-white">Maintenance & Optimization</h5>
                        <p class="mb-0">Pemeliharaan dan peningkatan kinerja</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                    <div class="position-relative bg-dark text-white rounded p-4 text-center d-flex flex-column align-items-center justify-content-center" style="min-height: 180px;">
                        <h5 class="text-white mb-3">Siap Berdiskusi?</h5>
                        <a href="#Kontak" class="btn btn-light">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solusi Integritas End -->

    <!-- ======= Industries Section ======= -->
    <section id="Industri" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title position-relative pb-3 mb-5">
            <h2 class="fw-bold text-primary text-uppercase">Industri yang kami layani</h2>
            <p>
                PT CONCORDE ELBE PRAYA melayani berbagai sektor industri dan institusi
                yang membutuhkan dukungan operasional, penyediaan sumber daya manusia,
                serta jasa penunjang usaha yang profesional dan berkelanjutan.
            </p>
        </div>

        <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-buildings"></i></div>
            <h4>Energi & Utilitas</h4>
            <p>
                Mendukung operasional perusahaan energi, utilitas, dan fasilitas
                pendukung dengan tenaga kerja terkelola dan sistem kerja yang patuh
                terhadap standar keselamatan dan regulasi.
            </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-cog"></i></div>
            <h4>Manufaktur & Industri Proses</h4>
            <p>
                Penyediaan SDM dan jasa penunjang untuk mendukung kelancaran proses
                produksi, pemeliharaan area kerja, serta stabilitas operasional
                fasilitas industri.
            </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-hard-hat"></i></div>
            <h4>Infrastruktur & Konstruksi</h4>
            <p>
                Mendukung proyek infrastruktur dan konstruksi melalui layanan
                pendukung operasional, tenaga kerja, serta pengelolaan lingkungan
                kerja proyek.
            </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-shield-quarter"></i></div>
            <h4>Fasilitas Publik & Pemerintahan</h4>
            <p>
                Layanan keamanan, kebersihan, dan pengelolaan fasilitas untuk gedung
                pemerintahan, fasilitas umum, serta institusi pelayanan publik.
            </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-store-alt"></i></div>
            <h4>Kawasan Komersial & Perkantoran</h4>
            <p>
                Penyediaan tenaga kerja dan jasa penunjang untuk gedung perkantoran,
                kawasan bisnis, dan fasilitas komersial dengan standar layanan
                profesional.
            </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="600">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-group"></i></div>
            <h4>Institusi & Layanan Umum</h4>
            <p>
                Dukungan operasional bagi institusi pendidikan, layanan kesehatan,
                dan fasilitas sosial melalui pengelolaan SDM dan lingkungan kerja
                yang tertib dan aman.
            </p>
            </div>
        </div>

        </div>

    </div>
    </section>
    <!-- End Industries Section -->

    <!-- Fasilitas & Teknologi Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="Infrastruktur">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">Fasilitas & Teknologi</h5>
                <h1 class="mb-0">Didukung Fasilitas Workshop dan Teknologi Produksi</h1>
            </div>
            
            <div class="row g-5">
                <!-- Kolom Kiri: Workshop & Peralatan -->
                <div class="col-lg-6">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h3 class="text-primary mb-3">Workshop & Peralatan</h3>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-light rounded p-4 text-center h-100">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px; margin: 0 auto;">
                                    <i class="fa fa-cogs fa-2x text-white"></i>
                                </div>
                                <h5>Mesin Machining Manual</h5>
                                <p class="mb-0">Pengerjaan presisi dengan kontrol manual untuk komponen khusus</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-light rounded p-4 text-center h-100">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px; margin: 0 auto;">
                                    <i class="fa fa-microchip fa-2x text-white"></i>
                                </div>
                                <h5>CNC Milling Multi-Axis</h5>
                                <p class="mb-0">Teknologi CNC canggih untuk pengerjaan kompleks multi-sumbu</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-light rounded p-4 text-center h-100">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px; margin: 0 auto;">
                                    <i class="fa fa-industry fa-2x text-white"></i>
                                </div>
                                <h5>Mesin Bubut & Milling</h5>
                                <p class="mb-0">Peralatan standar industri untuk produksi komponen mekanis</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-light rounded p-4 text-center h-100">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px; margin: 0 auto;">
                                    <i class="fa fa-fire fa-2x text-white"></i>
                                </div>
                                <h5>Fabrikasi & Pengelasan</h5>
                                <p class="mb-0">Peralatan lengkap untuk fabrikasi struktur dan pengelasan presisi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Produk & Sistem -->
                <div class="col-lg-6">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h3 class="text-primary mb-3">Produk & Sistem yang Dikerjakan</h3>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.3s">
                            <div class="bg-primary text-white rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                        <i class="fa fa-cog text-primary"></i>
                                    </div>
                                    <h5 class="text-white mb-0">Komponen Presisi</h5>
                                </div>
                                <p>Komponen industri dengan toleransi ketat dan material khusus</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.5s">
                            <div class="bg-primary text-white rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                        <i class="fa fa-gear text-primary"></i>
                                    </div>
                                    <h5 class="text-white mb-0">Gear & Gearbox</h5>
                                </div>
                                <p>Sistem transmisi daya dengan perhitungan kinematika presisi</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.7s">
                            <div class="bg-light rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                        <i class="fa fa-oil-can text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Hydraulic System</h5>
                                </div>
                                <p>Cylinder, power unit, dan sistem kontrol hidraulik terintegrasi</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="bg-light rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                        <i class="fa fa-temperature-high text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Heat Exchanger</h5>
                                </div>
                                <p>Heat exchanger dan evaporator untuk sistem pendinginan industri</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sistem Tambahan -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h4 class="text-primary mb-3">Sistem Pendukung Lainnya</h4>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3" style="width: 50px; height: 50px;">
                                    <i class="fa fa-truck text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Conveyor System</h6>
                                    <small>Sistem transportasi material otomatis</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3" style="width: 50px; height: 50px;">
                                    <i class="fa fa-water text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Sistem Pompa & Valve</h6>
                                    <small>Pengendalian sistem fluida industri</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3" style="width: 50px; height: 50px;">
                                    <i class="fa fa-toolbox text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Custom Fabrication</h6>
                                    <small>Fabrikasi sesuai kebutuhan khusus</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paragraf Penutup -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="bg-primary text-white rounded p-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row align-items-center">
                            <div class="col-lg-9">
                                <h4 class="text-white mb-3">Fasilitas Modern untuk Solusi Industri</h4>
                                <p class="mb-0">Fasilitas kami dirancang untuk mendukung pekerjaan skala proyek maupun kebutuhan khusus industri. Dengan kombinasi teknologi terkini dan keahlian teknikal, kami siap menjawab tantangan produksi yang paling kompleks.</p>
                            </div>
                            <div class="col-lg-3 text-lg-end mt-3 mt-lg-0">
                                <a href="#Kontak" class="btn btn-light py-3 px-4">Konsultasi Kebutuhan Anda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fasilitas & Teknologi End -->

    <!-- Gallery Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="Galeri">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">Gallery</h5>
                <h1 class="mb-0">Bukti Visual Kinerja & Fasilitas</h1>
                <p class="mt-3">Dokumentasi workshop, proyek, dan aktivitas operasional perusahaan.</p>
            </div>

            <!-- Gallery Grid -->
            <div class="row g-4 gallery-grid">
                <!-- Items -->
                <?php 
                    $query = mysqli_query($conn, "SELECT * FROM galeri");
                    while($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-4 col-md-6 gallery-item" data-category="workshop">
                        <div class="position-relative overflow-hidden rounded">
                            <img class="img-fluid w-100" src="<?= str_replace("../../../", "", $data['Jalur']) ?>" loading="lazy" alt="<?= $data['Judul'] ?>">
                            <div class="gallery-overlay">
                                <div class="p-4">
                                    <h5 class="text-white">Image</h5>
                                    <p class="text-white">Security</p>
                                    <a href="<?= str_replace("../../../", "", $data['Jalur']) ?>" class="btn btn-light btn-sm" data-lightbox="gallery">
                                        <i class="fa fa-expand me-1"></i> Zoom
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Portofolio & Klien Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="Proyek">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">Portofolio & Klien</h5>
                <h1 class="mb-0">Dipercaya oleh Industri dan Proyek Strategis</h1>
            </div>

            <!-- Klien Utama -->
            <div class="row g-5 mb-5">
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h3 class="text-primary mb-3">Kami Telah dan Siap Bekerja Sama Dengan</h3>
                    </div>
                    <p class="mb-4">Sebagai mitra terpercaya, kami telah membangun hubungan jangka panjang dengan berbagai sektor industri strategis di Indonesia.</p>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-handshake text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Siap Bermitra?</h5>
                            <a href="#Kontak" class="text-primary fw-bold">Hubungi Tim Kami →</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <!-- Perusahaan Energi -->
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-light rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-bolt text-white fa-2x"></i>
                                    </div>
                                    <h4 class="mb-0">Perusahaan Energi & Utilitas</h4>
                                </div>
                                <p class="mb-0">Mendukung operasional perusahaan energi, utilitas, dan fasilitas pendukung dengan tenaga kerja terkelola dan sistem kerja yang patuh terhadap standar keselamatan dan regulasi.</p>
                            </div>
                        </div>

                        <!-- Kontraktor EPC -->
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary text-white rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-white rounded d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-hard-hat text-primary fa-2x"></i>
                                    </div>
                                    <h4 class="text-white mb-0">Kontraktor EPC & Konstruksi Nasional</h4>
                                </div>
                                <p class="mb-0">Sebagai sub-kontraktor terpercaya untuk proyek Engineering, Procurement, Construction (EPC) berskala nasional dengan fokus pada kualitas dan ketepatan waktu.</p>
                            </div>
                        </div>

                        <!-- Industri Manufaktur -->
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary text-white rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-white rounded d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-industry text-primary fa-2x"></i>
                                    </div>
                                    <h4 class="text-white mb-0">Industri Manufaktur & Proses</h4>
                                </div>
                                <p class="mb-0">Penyediaan SDM dan jasa penunjang untuk mendukung kelancaran proses produksi, pemeliharaan area kerja, serta stabilitas operasional fasilitas industri.</p>
                            </div>
                        </div>

                        <!-- Proyek Infrastruktur -->
                        <div class="col-md-6 wow zoomIn" data-wow-delay="1s">
                            <div class="bg-light rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-road text-white fa-2x"></i>
                                    </div>
                                    <h4 class="mb-0">Proyek Infrastruktur & Fasilitas Publik</h4>
                                </div>
                                <p class="mb-0">Mendukung proyek infrastruktur dan fasilitas publik melalui layanan pendukung operasional, tenaga kerja, serta pengelolaan lingkungan kerja proyek.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pendekatan Kami -->
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="database/image/portofolio-1.jpg" style="object-fit: cover;" loading="lazy" alt="Tim Kerja">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h3 class="text-primary mb-3">Pendekatan Kerja Kami</h3>
                    </div>
                    <p class="mb-4">Kami berkomitmen untuk selalu memberikan hasil terbaik dengan pendekatan profesional yang berstandar tinggi.</p>
                    
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3" style="width: 50px; height: 50px;">
                                    <i class="fa fa-user-check text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Bekerja Sesuai Standar Klien</h6>
                                    <small>Memahami dan mengadopsi SOP klien</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.7s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3" style="width: 50px; height: 50px;">
                                    <i class="fa fa-balance-scale text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Kepatuhan Regulasi Nasional</h6>
                                    <small>Selaras dengan peraturan pemerintah</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.8s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3" style="width: 50px; height: 50px;">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Praktik Terbaik Industri</h6>
                                    <small>Mengikuti standar internasional</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3" style="width: 50px; height: 50px;">
                                    <i class="fa fa-chart-line text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Continuous Improvement</h6>
                                    <small>Peningkatan berkelanjutan</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo Klien -->
            <!-- <div class="row wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12">
                    <div class="section-title text-center position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Klien Terpercaya</h5>
                        <h2 class="mb-0">Beberapa Mitra yang Telah Bekerja Sama</h2>
                    </div>
                    
                    <div class="bg-white rounded p-4">
                        <div class="owl-carousel client-carousel">
                            <div class="client-item text-center">
                                <div class="bg-light rounded p-4 mx-auto" style="width: 180px; height: 120px;">
                                    <i class="fa fa-building fa-3x text-primary mb-3"></i>
                                    <h6 class="mb-0">Perusahaan Energi Nasional</h6>
                                </div>
                            </div>
                            <div class="client-item text-center">
                                <div class="bg-light rounded p-4 mx-auto" style="width: 180px; height: 120px;">
                                    <i class="fa fa-industry fa-3x text-primary mb-3"></i>
                                    <h6 class="mb-0">Manufaktur Baja</h6>
                                </div>
                            </div>
                            <div class="client-item text-center">
                                <div class="bg-light rounded p-4 mx-auto" style="width: 180px; height: 120px;">
                                    <i class="fa fa-hard-hat fa-3x text-primary mb-3"></i>
                                    <h6 class="mb-0">Kontraktor EPC</h6>
                                </div>
                            </div>
                            <div class="client-item text-center">
                                <div class="bg-light rounded p-4 mx-auto" style="width: 180px; height: 120px;">
                                    <i class="fa fa-road fa-3x text-primary mb-3"></i>
                                    <h6 class="mb-0">Pengembang Infrastruktur</h6>
                                </div>
                            </div>
                            <div class="client-item text-center">
                                <div class="bg-light rounded p-4 mx-auto" style="width: 180px; height: 120px;">
                                    <i class="fa fa-water fa-3x text-primary mb-3"></i>
                                    <h6 class="mb-0">Perusahaan Utilitas</h6>
                                </div>
                            </div>
                            <div class="client-item text-center">
                                <div class="bg-light rounded p-4 mx-auto" style="width: 180px; height: 120px;">
                                    <i class="fa fa-warehouse fa-3x text-primary mb-3"></i>
                                    <h6 class="mb-0">Logistik & Gudang</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- CTA Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="bg-dark text-white rounded p-5 wow fadeIn" data-wow-delay="0.2s">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h4 class="text-white mb-3">Jadilah Bagian dari Kesuksesan Proyek Strategis</h4>
                                <p class="mb-0">Bergabung dengan jaringan klien terpercaya kami dan rasakan pelayanan profesional yang mengutamakan kualitas, keselamatan, dan kepuasan mitra.</p>
                            </div>
                            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                <a href="#Kontak" class="btn btn-primary py-3 px-4">Mulai Kerja Sama</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portofolio & Klien End -->

    <!-- Struktur Organisasi Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="Struktur">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">Struktur Organisasi</h5>
                <h1 class="mb-0">Tata Kelola yang Solid untuk Hasil Optimal</h1>
                <p class="mt-3">Struktur organisasi yang jelas memastikan akuntabilitas, efisiensi komunikasi, dan keberhasilan penyelesaian proyek.</p>
            </div>

            <!-- Struktur Gambar -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="bg-light rounded p-4 text-center">
                        <div class="mb-4">
                            <i class="fa fa-sitemap fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Diagram Struktur Organisasi</h4>
                        </div>
                        
                        <div class="position-relative rounded overflow-hidden">
                            <img id="orgChart" 
                                src="database/image/image-struktur.jpg" 
                                class="img-fluid rounded shadow-sm cursor-zoom"
                                alt="Struktur Organisasi PT CONCORDE ELBE PRAYA"
                                loading="lazy"
                                style="transition: transform 0.3s ease; cursor: zoom-in;"
                                width="400px;">
                            
                            <!-- Zoom Overlay -->
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50" 
                                style="opacity: 0; transition: opacity 0.3s;" 
                                id="zoomOverlay">
                                <button class="btn btn-primary btn-lg rounded-circle" onclick="zoomOrgChart()">
                                    <i class="fa fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mt-3 text-muted">
                            <small><i class="fa fa-info-circle me-1"></i>Diagram menunjukkan alur komando dan koordinasi tim</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divisi & Departemen -->
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="bg-primary text-white rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-user-tie text-primary fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="text-white mb-0">Manajemen</h4>
                                <small class="text-white-50">Pimpinan & Direksi</small>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fa fa-check-circle me-2"></i>Direktur Utama</li>
                            <li class="mb-2"><i class="fa fa-check-circle me-2"></i>Direktur Operasional</li>
                            <li class="mb-2"><i class="fa fa-check-circle me-2"></i>Direktur Keuangan</li>
                            <li><i class="fa fa-check-circle me-2"></i>Direktur Teknik</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="bg-light rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cogs text-white fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-0">Operasional</h4>
                                <small class="text-muted">Tim Lapangan & Workshop</small>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fa fa-wrench text-primary me-2"></i>Engineering</li>
                            <li class="mb-2"><i class="fa fa-industry text-primary me-2"></i>Produksi</li>
                            <li class="mb-2"><i class="fa fa-hard-hat text-primary me-2"></i>Proyek</li>
                            <li class="mb-2"><i class="fa fa-tools text-primary me-2"></i>Maintenance</li>
                            <li><i class="fa fa-shield-alt text-primary me-2"></i>K3 & Quality Control</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.6s">
                    <div class="bg-light rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-chart-line text-white fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-0">Pendukung</h4>
                                <small class="text-muted">Administrasi & Bisnis</small>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fa fa-users text-primary me-2"></i>HR & SDM</li>
                            <li class="mb-2"><i class="fa fa-file-invoice-dollar text-primary me-2"></i>Keuangan</li>
                            <li class="mb-2"><i class="fa fa-shopping-cart text-primary me-2"></i>Procurement</li>
                            <li class="mb-2"><i class="fa fa-handshake text-primary me-2"></i>Business Development</li>
                            <li><i class="fa fa-desktop text-primary me-2"></i>IT & Digital</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Visi Struktur -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="bg-dark text-white rounded p-5 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h4 class="text-white mb-3"><i class="fa fa-bullseye me-3"></i>Visi Struktur Organisasi</h4>
                                <p class="mb-0">Struktur yang kami bangun bertujuan untuk memastikan responsivitas terhadap kebutuhan klien, efisiensi dalam eksekusi proyek, dan pertumbuhan berkelanjutan perusahaan. Setiap divisi memiliki peran yang jelas namun tetap terintegrasi dalam mencapai tujuan bersama.</p>
                            </div>
                            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                <a href="database/image/image-struktur.jpg" 
                                class="btn btn-light" 
                                download="Struktur-Organisasi-PT-CONCORDE-ELBE-PRAYA.jpg">
                                    <i class="fa fa-download me-2"></i>Download Diagram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Struktur Organisasi End -->
     
    <!-- Kemitraan & Kerja Sama Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="Kemitraan">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">Kemitraan & Kerja Sama</h5>
                <h1 class="mb-0">Mari Membangun Kolaborasi Jangka Panjang</h1>
            </div>

            <!-- Intro Section -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center wow fadeInUp" data-wow-delay="0.2s">
                    <p class="lead mb-4">PT CONCORDE ELBE PRAYA terbuka untuk kerja sama strategis dengan berbagai entitas dalam ekosistem industri konstruksi dan manufaktur Indonesia.</p>
                    <div class="bg-primary text-white rounded p-4 d-inline-block">
                        <h5 class="text-white mb-0"><i class="fa fa-quote-left me-2"></i>Kolaborasi yang tepat menciptakan nilai berkelanjutan<i class="fa fa-quote-right ms-2"></i></h5>
                    </div>
                </div>
            </div>

            <!-- Jenis Mitra -->
            <div class="row g-5 mb-5">
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded-circle mb-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-building fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-white mb-3">Pemilik Proyek</h4>
                        <p class="text-white mb-4">Perusahaan atau institusi pemilik proyek konstruksi dan industri</p>
                        <div class="border-top border-white pt-3 w-100">
                            <small class="text-white">• Developer Properti</small><br>
                            <small class="text-white">• BUMN & Swasta</small><br>
                            <small class="text-white">• Institusi Pemerintah</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded-circle mb-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-hard-hat fa-2x text-white"></i>
                        </div>
                        <h4 class="mb-3">Kontraktor Utama</h4>
                        <p class="mb-4">Sebagai mitra sub-kontraktor yang andal untuk spesialisasi tertentu</p>
                        <div class="border-top pt-3 w-100">
                            <small class="text-muted">• General Contractor</small><br>
                            <small class="text-muted">• EPC Contractor</small><br>
                            <small class="text-muted">• Mechanical Contractor</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                    <div class="bg-light rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded-circle mb-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-microchip fa-2x text-white"></i>
                        </div>
                        <h4 class="mb-3">Mitra Teknologi</h4>
                        <p class="mb-4">Kolaborasi dalam pengembangan solusi dan inovasi teknologi</p>
                        <div class="border-top pt-3 w-100">
                            <small class="text-muted">• Equipment Supplier</small><br>
                            <small class="text-muted">• Software Developer</small><br>
                            <small class="text-muted">• R&D Institution</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-dark text-white rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded-circle mb-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-chart-line fa-2x text-white"></i>
                        </div>
                        <h4 class="text-white mb-3">Investor & Pengembang</h4>
                        <p class="text-white mb-4">Kemitraan dalam pengembangan industri dan ekspansi usaha</p>
                        <div class="border-top border-light pt-3 w-100">
                            <small class="text-light">• Venture Capital</small><br>
                            <small class="text-light">• Industrial Developer</small><br>
                            <small class="text-light">• Strategic Partner</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Model Kerja Sama -->
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h3 class="text-primary mb-3">Model Kerja Sama yang Ditawarkan</h3>
                    </div>
                    
                    <div class="accordion" id="partnershipAccordion">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="fa fa-handshake me-3 text-primary"></i> Sub-Kontrak Spesialis
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#partnershipAccordion">
                                <div class="accordion-body">
                                    Penyediaan tenaga ahli dan peralatan untuk pekerjaan spesifik seperti fabrikasi, machining, atau instalasi mekanikal.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <i class="fa fa-users me-3 text-primary"></i> Joint Operation
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#partnershipAccordion">
                                <div class="accordion-body">
                                    Kolaborasi operasional dengan pembagian sumber daya dan risiko untuk proyek skala besar.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    <i class="fa fa-industry me-3 text-primary"></i> Konsorsium Proyek
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#partnershipAccordion">
                                <div class="accordion-body">
                                    Pembentukan tim bersama untuk tender atau eksekusi proyek yang membutuhkan multi-disiplin.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    <i class="fa fa-sync-alt me-3 text-primary"></i> Strategic Alliance
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#partnershipAccordion">
                                <div class="accordion-body">
                                    Kemitraan jangka panjang dengan skema revenue sharing untuk pengembangan pasar bersama.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="database/image/partnership.jpg" style="object-fit: cover;" loading="lazy" alt="Team Collaboration">
                    </div>
                </div>
            </div>

            <!-- Keunggulan Bermitra -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="section-title text-center position-relative pb-3 mb-5">
                        <h3 class="text-primary mb-3">Mengapa Bermitra dengan Kami?</h3>
                    </div>
                    
                    <div class="row g-4">
                        <div class="col-md-4 wow zoomIn" data-wow-delay="0.3s">
                            <div class="d-flex flex-column align-items-center text-center p-4 border rounded h-100">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                    <i class="fa fa-shield-alt fa-2x text-white"></i>
                                </div>
                                <h5 class="mb-3">Track Record Terbukti</h5>
                                <p class="mb-0">Portofolio proyek yang diverifikasi dengan klien terkemuka di berbagai sektor.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4 wow zoomIn" data-wow-delay="0.5s">
                            <div class="d-flex flex-column align-items-center text-center p-4 border rounded h-100">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                    <i class="fa fa-cogs fa-2x text-white"></i>
                                </div>
                                <h5 class="mb-3">Fasilitas Lengkap</h5>
                                <p class="mb-0">Workshop dan peralatan modern yang siap mendukung berbagai kebutuhan proyek.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4 wow zoomIn" data-wow-delay="0.7s">
                            <div class="d-flex flex-column align-items-center text-center p-4 border rounded h-100">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                    <i class="fa fa-user-tie fa-2x text-white"></i>
                                </div>
                                <h5 class="mb-3">Tim Profesional</h5>
                                <p class="mb-0">SDM bersertifikat dan berpengalaman dalam menangani proyek kompleks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proses Kerja Sama -->
            <div class="row">
                <div class="col-12">
                    <div class="bg-light rounded p-5 wow fadeIn" data-wow-delay="0.2s">
                        <div class="section-title position-relative pb-3 mb-4">
                            <h4 class="text-primary mb-3">Proses Inisiasi Kerja Sama</h4>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="process-step text-center">
                                    <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <span class="h4 mb-0">1</span>
                                    </div>
                                    <h6>Initial Meeting</h6>
                                    <p class="small">Diskusi kebutuhan dan ekspektasi</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="process-step text-center">
                                    <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <span class="h4 mb-0">2</span>
                                    </div>
                                    <h6>Feasibility Study</h6>
                                    <p class="small">Analisis kelayakan teknis & komersial</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="process-step text-center">
                                    <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <span class="h4 mb-0">3</span>
                                    </div>
                                    <h6>Agreement Drafting</h6>
                                    <p class="small">Penyusunan dokumen kesepakatan</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="process-step text-center">
                                    <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <span class="h4 mb-0">4</span>
                                    </div>
                                    <h6>Execution & Monitoring</h6>
                                    <p class="small">Implementasi & evaluasi berkala</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="bg-primary text-white rounded p-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h3 class="text-white mb-3"><i class="fa fa-handshake me-3"></i>Siap Membangun Kemitraan?</h3>
                                <p class="mb-0">Kami percaya kolaborasi yang tepat akan menciptakan nilai berkelanjutan bagi semua pihak. Mari duduk bersama dan diskusikan peluang kerja sama.</p>
                            </div>
                            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                <a href="#Kontak" class="btn btn-light btn-lg py-3 px-4">
                                    <i class="fa fa-calendar-check me-2"></i>Jadwalkan Meeting
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kemitraan & Kerja Sama End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s" id="Kontak">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="#Beranda" class="navbar-brand">
                            <img loading="lazy" src="database/image/logo-full.png" style="width: 300px;">
                        </a>
                        <p class="mt-3 mb-4">Perusahaan nasional bergerak di bidang penyediaan sumber daya manusia, jasa penunjang usaha, keamanan swasta, dan layanan pemeliharaan fasilitas untuk industri dan institusi.</p>
                        <div class="d-flex">
                            <a class="btn btn-outline-light btn-square rounded-circle me-2" href="#">
                                <i class="fab fa-twitter fw-normal"></i>
                            </a>
                            <a class="btn btn-outline-light btn-square rounded-circle me-2" href="#">
                                <i class="fab fa-facebook-f fw-normal"></i>
                            </a>
                            <a class="btn btn-outline-light btn-square rounded-circle me-2" href="#">
                                <i class="fab fa-linkedin-in fw-normal"></i>
                            </a>
                            <a class="btn btn-outline-light btn-square rounded-circle" href="#">
                                <i class="fab fa-instagram fw-normal"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <!-- Kontak & Kantor -->
                        <div class="col-lg-5 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Kontak & Kantor</h3>
                            </div>
                            
                            <div class="d-flex align-items-start mb-3">
                                <div>
                                    <h6 class="text-light mb-1">Kantor Pusat</h6>
                                    <p class="mb-0">
                                        <?= htmlspecialchars_decode($contents[23]['Isi']) ?>
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <h6 class="text-light mb-1">Telepon</h6>
                                    <p class="mb-0">
                                        <?= htmlspecialchars_decode($contents[24]['Isi']) ?> / <?= htmlspecialchars_decode($contents[25]['Isi']) ?>
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <div>
                                    <h6 class="text-light mb-1">Email</h6>
                                    <p class="mb-0">
                                        <?= htmlspecialchars_decode($contents[26]['Isi']) ?>
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="https://wa.me/<?= str_replace(['+', ' ', '-'], '', $contents[25]['Isi']) ?>?text=Halo%20PT%20CONCORDE%20ELBE%20PRAYA%2C%20saya%20ingin%20berdiskusi%20tentang%20proyek" 
                                class="btn btn-success btn-sm" target="_blank">
                                    <i class="fab fa-whatsapp me-2"></i>Chat via WhatsApp
                                </a>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="col-lg-3 col-md-6 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Menu Utama</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#Beranda"><i class="bi bi-arrow-right text-primary me-2"></i>Beranda</a>
                                <a class="text-light mb-2" href="#Profil"><i class="bi bi-arrow-right text-primary me-2"></i>Profil Perusahaan</a>
                                <a class="text-light mb-2" href="#Layanan"><i class="bi bi-arrow-right text-primary me-2"></i>Layanan</a>
                                <a class="text-light mb-2" href="#Fasilitas"><i class="bi bi-arrow-right text-primary me-2"></i>Fasilitas</a>
                                <a class="text-light mb-2" href="#Portofolio"><i class="bi bi-arrow-right text-primary me-2"></i>Portofolio</a>
                                <a class="text-light" href="#Kemitraan"><i class="bi bi-arrow-right text-primary me-2"></i>Kemitraan</a>
                            </div>
                        </div>

                        <!-- Layanan Kami -->
                        <div class="col-lg-4 col-md-6 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Layanan Kami</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#Layanan"><i class="fa fa-users text-primary me-2"></i>Penyediaan SDM</a>
                                <a class="text-light mb-2" href="#Layanan"><i class="fa fa-cogs text-primary me-2"></i>Jasa Penunjang Operasional</a>
                                <a class="text-light mb-2" href="#Layanan"><i class="fa fa-shield-alt text-primary me-2"></i>Layanan Keamanan</a>
                                <a class="text-light mb-2" href="#Fasilitas"><i class="fa fa-industry text-primary me-2"></i>Fabrikasi & Machining</a>
                                <a class="text-light mb-2" href="#Fasilitas"><i class="fa fa-tools text-primary me-2"></i>Maintenance Fasilitas</a>
                                <a class="text-light" href="#Kemitraan"><i class="fa fa-handshake text-primary me-2"></i>Kerja Sama Proyek</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Penutup -->
        <br><br><br><br>
        <div class="container-fluid py-5" style="background: rgba(13, 110, 253, 0.1);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h3 class="text-white mb-3">Mulai Diskusi Proyek Anda Bersama Tim Kami</h3>
                        <p class="text-light mb-0">Kami siap memberikan solusi terbaik untuk kebutuhan konstruksi, fabrikasi, dan manajemen proyek Anda.</p>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                        <a href="#Kontak" class="btn btn-primary btn-lg py-3 px-5 pulse-btn">
                            <i class="fa fa-calendar-alt me-2"></i>Hubungi Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="container-fluid text-white py-3" style="background: #061429;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">
                        &copy; <a class="text-white border-bottom" href="#Beranda">PT CONCORDE ELBE PRAYA</a>. 
                        Hak Cipta Dilindungi Undang-Undang.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <span class="text-muted">Perusahaan Terdaftar & Berizin</span> | 
                        <a href="#" class="text-white ms-2">Kebijakan Privasi</a> | 
                        <a href="#" class="text-white ms-2">Syarat Layanan</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        // Client Carousel
        $('.client-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                },
                1200: {
                    items: 6
                }
            }
        });

        // Gallery Filtering
        document.addEventListener('DOMContentLoaded', function() {
            // Filter Gallery
            const filterButtons = document.querySelectorAll('[data-filter]');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Filter items
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                            setTimeout(() => item.style.opacity = '1', 10);
                        } else {
                            item.style.opacity = '0';
                            setTimeout(() => item.style.display = 'none', 300);
                        }
                    });
                });
            });
            
            // Load More Gallery
            const loadMoreBtn = document.getElementById('loadMore');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    this.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i>Loading...';
                    setTimeout(() => {
                        // Simulate loading more items
                        this.innerHTML = '<i class="fa fa-check me-2"></i>Semua Gambar Ditampilkan';
                        this.classList.remove('btn-primary');
                        this.classList.add('btn-success');
                        this.disabled = true;
                    }, 1500);
                });
            }
            
            // Zoom Organizational Chart
            const orgChart = document.getElementById('orgChart');
            const zoomOverlay = document.getElementById('zoomOverlay');
            
            if (orgChart && zoomOverlay) {
                orgChart.addEventListener('mouseenter', () => {
                    zoomOverlay.style.opacity = '1';
                });
                
                orgChart.addEventListener('mouseleave', () => {
                    zoomOverlay.style.opacity = '0';
                });
            }
        });

        function zoomOrgChart() {
            const orgChart = document.getElementById('orgChart');
            const imgSrc = orgChart.src;
            
            // Create modal for zoom
            const modalHTML = `
                <div class="modal fade" id="orgChartModal" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Struktur Organisasi - PT CONCORDE ELBE PRAYA</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body text-center p-0">
                                <img src="${imgSrc}" class="img-fluid w-100" alt="Struktur Organisasi Detail">
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            // Add modal to body
            document.body.insertAdjacentHTML('beforeend', modalHTML);
            
            // Show modal
            const modal = new bootstrap.Modal(document.getElementById('orgChartModal'));
            modal.show();
            
            // Remove modal after close
            document.getElementById('orgChartModal').addEventListener('hidden.bs.modal', function() {
                this.remove();
            });
        }
    </script>
</body>

</html>