<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $site_title;?></title>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url()?>assets/depan/img/Icon title.png" rel="icon">
    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url()?>assets/depan/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/depan/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url()?>assets/depan/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url()?>assets/depan/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white px-0">
<!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
<!-- Spinner End -->

<!-- Navbar Start -->
    <?php echo $header;?>
<!-- Navbar End -->

      
        <!-- Header Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-stretch">
            <!-- Bagian Teks -->
            <div class="col-lg-4 d-flex flex-column justify-content-between">
                <div>
                    <h1 class="display-5 animated fadeIn mb-4">Lampiran</h1>
                    <p class="animated fadeIn">
                        Halaman ini memuat berbagai dokumen dan data penting terkait Desa Pegat Bukur, termasuk laporan kegiatan, rencana pembangunan, serta peraturan desa. Informasi ini disediakan demi keterbukaan dan kemudahan akses bagi masyarakat.
                    </p>
                </div>
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="profil.html">Profil</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Lampiran</li>
                    </ol>
                </nav>
            </div>

            <!-- Gambar Ilustrasi -->
            <div class="col-lg-8">
                <div class="h-100 w-100">
                    <img src="<?php echo base_url()?>assets/depan/img/about.png" alt="Dokumentasi Lampiran Desa"
                         class="img-fluid rounded shadow"
                         style="height: 100%; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Lampiran Data Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">

                    <!-- Item Lampiran -->
                    <?php foreach($list_lampiran->result() as $row):?>
                    <div class="job-item p-4 mb-4 border rounded shadow-sm">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded bg-light" src="<?php echo base_url().'assets/depan/img/lampiran/'.$row->lampiran_image?>" alt="Dokumen" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-2"><?php echo $row->lampiran_title;?></h5>
                                    <p class="mb-0"><i class="far fa-calendar-alt text-primary me-2"></i>Dipublikasikan : <?php echo date('d M Y',strtotime($row->lampiran_date));?></p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <a class="btn btn-primary" href="<?php echo $row->lampiran_url;?>" target="_blank"><i class="fas fa-download me-2"></i>Unduh</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                    <!-- <div class="job-item p-4 mb-4 border rounded shadow-sm">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded bg-light" src="<?php echo base_url()?>assets/depan/img/word.png" alt="Dokumen PDF" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-2">Laporan Realisasi APBDes Tahun 2023</h5>
                                    <p class="mb-0"><i class="far fa-calendar-alt text-primary me-2"></i>Dipublikasikan: 5 Januari 2024</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <a class="btn btn-primary" href="dokumen/apbdes-2023.pdf" target="_blank"><i class="fas fa-download me-2"></i>Unduh</a>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="job-item p-4 mb-4 border rounded shadow-sm">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded bg-light" src="<?php echo base_url()?>assets/depan/img/excel.png" alt="Dokumen PDF" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-2">Peraturan Desa Tentang Pengelolaan Sampah</h5>
                                    <p class="mb-0"><i class="far fa-calendar-alt text-primary me-2"></i>Dipublikasikan: 20 Oktober 2023</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <a class="btn btn-primary" href="dokumen/perdes-sampah.pdf" target="_blank"><i class="fas fa-download me-2"></i>Unduh</a>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="job-item p-4 mb-4 border rounded shadow-sm">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded bg-light" src="<?php echo base_url()?>assets/depan/img/pdf.png" alt="Dokumen PDF" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-2">Data Statistik Kependudukan Tahun 2024</h5>
                                    <p class="mb-0"><i class="far fa-calendar-alt text-primary me-2"></i>Dipublikasikan: 1 Maret 2024</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <a class="btn btn-primary" href="dokumen/statistik-kependudukan-2024.pdf" target="_blank"><i class="fas fa-download me-2"></i>Unduh</a>
                            </div>
                        </div>
                    </div> -->

                    <!-- <a class="btn btn-outline-primary py-3 px-5" href="semua-lampiran.html">Lihat Semua Lampiran</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Lampiran Data End -->
    

<!-- footer start  -->
      <?php echo $footer;?>
<!-- footer end -->

    </div>

<!-- 1. jQuery dulu -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- 2. jQuery Easing -->
<script src="<?php echo base_url()?>assets/depan/lib/easing/easing.min.js"></script>

<!-- 3. Plugin dan Library lain -->
<script src="<?php echo base_url()?>assets/depan/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url()?>assets/depan/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url()?>assets/depan/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- 4. Custom JS kamu -->
<script src="<?php echo base_url()?>assets/depan/js/main.js"></script>
</body>

</html>
   