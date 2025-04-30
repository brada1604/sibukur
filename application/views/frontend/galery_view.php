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
    <link href="<?php echo base_url()?>assets/depan/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
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
            <!-- Informasi dan Navigasi -->
            <div class="col-lg-4 d-flex flex-column justify-content-between">
                <div>
                    <h1 class="display-5 animated fadeIn mb-3">Galeri Kampung</h1>
                    <p class="animated fadeIn text-muted">
                        Temukan kabar terbaru seputar kegiatan, pengumuman, serta informasi penting lainnya dari Desa Pegat Bukur. Bersama kita wujudkan desa yang maju, transparan, dan terhubung.
                    </p>
                </div>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase small mb-0">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Galeri Kampung</li>
                    </ol>
                </nav>
            </div>

            <!-- Gambar Ilustrasi -->
            <div class="col-lg-8">
                <div class="h-100 w-100">
                    <img src="<?php echo base_url()?>assets/depan/img/about.png" alt="Berita Kampung" 
                         class="img-fluid rounded shadow" 
                         style="height: 100%; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Galeri Start -->
<div class="container gallery py-5">

    <div class="row g-3 justify-content-center">
        <?php foreach($list_galery->result() as $row):?>
        <div class="col-6 col-sm-4 col-md-3">
            <div class="gallery-item position-relative">
                <img src="<?php echo base_url().'assets/depan/img/galery/'.$row->galery_image?>" class="img-fluid w-100 rounded" alt="galeri">
                <div class="gallery-plus-icon position-absolute top-50 start-50 translate-middle">
                    <a href="<?php echo base_url().'assets/depan/img/galery/'.$row->galery_image?>" data-lightbox="galeri" class="text-white">
                        <i class="fas fa-plus fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach;?>

        <!-- <div class="col-6 col-sm-4 col-md-3">
            <div class="gallery-item position-relative">
                <img src="<?php echo base_url()?>assets/depan/img/destination-1.jpg" class="img-fluid w-100 rounded" alt="galeri">
                <div class="gallery-plus-icon position-absolute top-50 start-50 translate-middle">
                    <a href="<?php echo base_url()?>assets/depan/img/destination-1.jpg" data-lightbox="galeri" class="text-white">
                        <i class="fas fa-plus fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3">
            <div class="gallery-item position-relative">
                <img src="<?php echo base_url()?>assets/depan/img/destination-1.jpg" class="img-fluid w-100 rounded" alt="galeri">
                <div class="gallery-plus-icon position-absolute top-50 start-50 translate-middle">
                    <a href="<?php echo base_url()?>assets/depan/img/destination-1.jpg" data-lightbox="galeri" class="text-white">
                        <i class="fas fa-plus fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3">
            <div class="gallery-item position-relative">
                <img src="<?php echo base_url()?>assets/depan/img/destination-1.jpg" class="img-fluid w-100 rounded" alt="galeri">
                <div class="gallery-plus-icon position-absolute top-50 start-50 translate-middle">
                    <a href="<?php echo base_url()?>assets/depan/img/destination-1.jpg" data-lightbox="galeri" class="text-white">
                        <i class="fas fa-plus fa-2x"></i>
                    </a>
                </div>
            </div>
        </div> -->
        
        <!-- Tambah item sesuai kebutuhan -->
    </div>
</div>
<!-- Galeri End -->

    

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
<script src="<?php echo base_url()?>assets/depan/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php echo base_url()?>assets/depan/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url()?>assets/depan/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url()?>assets/depan/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- 4. Custom JS kamu -->
<script src="<?php echo base_url()?>assets/depan/js/main.js"></script>
</body>

</html>
   