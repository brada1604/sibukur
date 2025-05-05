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
                <div class="row g-5 align-items-center">
                    <!-- Left Column -->
                    <div class="col-lg-6 d-flex flex-column justify-content-between">
                        <div>
                            <h1 class="display-5 animated fadeIn mb-4">Tentang Kami</h1>
                            <p class="animated fadeIn">
                                Kami adalah komunitas desa yang berdedikasi dalam membangun masa depan lebih baik melalui partisipasi aktif dan semangat gotong royong.
                            </p>
                        </div>
                    </div>

                    <!-- Right Column (Image) -->
                    <div class="col-lg-6">
                        <div class="h-100 w-100">
                            <img src="<?php echo base_url()?>assets/depan/img/about.png" alt="Tentang Kami" class="img-fluid rounded shadow" style="object-fit: cover; height: 100%; width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Sambutan Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="<?php echo base_url().'theme/images/'.$about_img; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Sambutan Kepala Kampung Pegat Bukur</h1>
                        <p class="mb-4"><?php echo $about_desc; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sambutan End -->

        <!-- Visi Misi Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h1 class="mb-0">Visi & Misi Kampung <br> Pegat Bukur</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa fa-cogs text-white"></i>
                                </div>
                                <h4>Visi</h4>
                                <p class="mb-0"><?php echo $about_visi; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="<?php echo base_url().'theme/images/'.$about_logo; ?>" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa fa-people-carry text-white"></i>
                                </div>
                                <h4>Misi</h4>
                                <p class="mb-0"><?php echo $about_misi; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visi Misi End -->
    
    
        <!-- Lokasi Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <!-- Deskripsi Lokasi -->
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Lokasi Kampung</h1>
                    <p><?php echo $about_loc; ?> </p>
                </div>
        
                <!-- Peta Lokasi -->
                <div class="row g-4">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <?php echo $about_map; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lokasi End -->

        <!-- Staf Kampung Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Staf Kampung</h1>
                    <p>Berikut adalah daftar staf yang berperan aktif dalam pembangunan dan pelayanan masyarakat Kampung Pegat Bukur.</p>
                </div>
                <div class="row g-4">
                    <!-- Repeat for each staff -->
                    <?php foreach($list_staff->result() as $row3):?>
                        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item rounded overflow-hidden shadow-sm">
                                <div class="position-relative">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/depan/img/staff/'.$row3->staff_image?>" alt="Foto Staf">
                                    <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                        <a class="btn btn-square btn-outline-secondary mx-1" href="<?php echo $row3->staff_facebook;?>"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-outline-secondary mx-1" href="<?php echo $row3->staff_x;?>"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-outline-secondary mx-1" href="<?php echo $row3->staff_instagram;?>"><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-outline-secondary mx-1" href="<?php echo $row3->staff_whatsapp;?>"><i class="fab fa-whatsapp"></i></a>
                                        <a class="btn btn-square btn-outline-secondary mx-1" href="<?php echo $row3->staff_tiktok;?>"><i class="fab fa-tiktok"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-1"><?php echo $row3->staff_name;?></h5>
                                    <small><?php echo $row3->staff_position;?></small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>                
                    <!-- Ulangi blok di atas untuk staf lainnya -->
                </div>
            </div>
        </div>
        <!-- Staf Kampung End -->

        <!-- footer start  -->
        <?php echo $footer;?>
        <!-- footer end -->

 

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
   