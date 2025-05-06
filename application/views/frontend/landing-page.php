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

<div class="parallax-header">

<!-- Carousel Start -->
<!-- Header Start -->
<div class="container py-5">
    <div class="row align-items-center">

        <!-- Card Teks -->
        <div class="col-md-6 mb-4 mb-md-0 order-2 order-md-1">
            <div class="card shadow-lg border-0 rounded-4 p-4 h-100 position-relative">
                <div id="header-texts">
                    <?php $no = 0; ?>
                    <?php foreach ($latest_post->result() as $row): ?>
                        <div class="header-text <?php echo $no === 0 ? 'active' : 'd-none'; ?>" data-text-index="<?php echo $no; ?>">
                            <span class="badge bg-success mb-2">#<?php echo ucwords($row->category_name); ?></span>
                            <h2 class="fw-bold mt-2 mb-3"><?php echo $row->post_title; ?></h2>
                            <p>
                                <?php 
                                    $desc = $row->post_description;
                                    echo strlen($desc) > 150 ? substr($desc, 0, 150) . '...' : $desc;
                                ?>
                            </p>
                            <a href="<?php echo site_url('blog/' . $row->post_slug); ?>" class="btn btn-success mt-3">Selengkapnya ></a>
                        </div>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </div>

                <!-- Panah Carousel -->
                <div class="custom-nav mt-3">
                    <button class="btn btn-success rounded-circle me-2" id="prevSlide"><i class="bi bi-chevron-left"></i></button>
                    <button class="btn btn-success rounded-circle" id="nextSlide"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>

        <!-- Gambar Carousel -->
        <div class="col-md-6 order-1 order-md-2">
            <div class="owl-carousel header-carousel">
                <?php $no = 0; ?>
                <?php foreach ($latest_post->result() as $row): ?>
                    <div class="owl-carousel-item" data-text-index="<?php echo $no++; ?>">
                        <img class="img-fluid shadow" src="<?php echo base_url('assets/images/thumb/' . $row->post_image); ?>" alt="<?php echo $row->post_title; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
<!-- Header End -->
</div>
<!-- Carousel End -->



<!-- Pilihan Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-3 justify-content-center">

            <!-- Data Kampung -->
            <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3 h-100" href="<?php echo base_url()?>data-kampung">
                    <div class="rounded py-4 px-2 d-flex flex-column align-items-center justify-content-center h-100">
                        <div class="icon text-primary mb-2" style="font-size: 26px;">
                            <i class="fas fa-database"></i>
                        </div>
                        <h6 class="mb-0 fs-6">Data Kampung</h6>
                    </div>
                </a>
            </div>

            <!-- Berita -->
            <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                <a class="cat-item d-block bg-light text-center rounded p-3 h-100" href="<?php echo base_url()?>blog">
                    <div class="rounded py-4 px-2 d-flex flex-column align-items-center justify-content-center h-100">
                        <div class="icon text-primary mb-2" style="font-size: 26px;">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <h6 class="mb-0 fs-6">Berita</h6>
                    </div>
                </a>
            </div>

            <!-- Lampiran -->
            <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3 h-100" href="<?php echo base_url()?>lampiran">
                    <div class="rounded py-4 px-2 d-flex flex-column align-items-center justify-content-center h-100">
                        <div class="icon text-primary mb-2" style="font-size: 26px;">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h6 class="mb-0 fs-6">Lampiran</h6>
                    </div>
                </a>
            </div>

            <!-- Unggulan Kampung -->
            <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                <a class="cat-item d-block bg-light text-center rounded p-3 h-100" href="<?php echo base_url()?>unggulan-kampung">
                    <div class="rounded py-4 px-2 d-flex flex-column align-items-center justify-content-center h-100">
                        <div class="icon text-primary mb-2" style="font-size: 26px;">
                            <i class="fas fa-award"></i>
                        </div>
                        <h6 class="mb-0 fs-6">Unggulan Kampung</h6>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>
<!-- Pilihan End -->





               <!-- Sambutan Start -->
               <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="about-img position-relative overflow-hidden p-3 pe-0">
                                <!-- <img class="img-fluid w-100" src="<?php echo base_url()?>assets/depan/img/Kepala Kampung.png"> -->
                                <img class="img-fluid w-100" src="<?php echo base_url().'theme/images/'.$about_img; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="mb-4">Sambutan Kepala Kampung Pegat Bukur</h1>
                            <p class="mb-4"><?php echo $about_desc; ?></p>
                            
                            <a class="btn btn-primary py-3 px-5 mt-3" href="<?php echo base_url()?>about">Selengkapnya Tentang Kampung</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sambutan End -->


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

            <!-- <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/team-1.jpg" alt="Foto Staf">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-1">Nama Lengkap</h5>
                        <small>Jabatan</small>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/team-1.jpg" alt="Foto Staf">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-1">Nama Lengkap</h5>
                        <small>Jabatan</small>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/team-1.jpg" alt="Foto Staf">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-1">Nama Lengkap</h5>
                        <small>Jabatan</small>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/team-1.jpg" alt="Foto Staf">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-square btn-outline-secondary mx-1" href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-1">Nama Lengkap</h5>
                        <small>Jabatan</small>
                    </div>
                </div>
            </div> -->
            
            <!-- Ulangi blok di atas untuk staf lainnya -->
        </div>
    </div>
</div>
<!-- Staf Kampung End -->

<!-- Lokasi Start -->
<div class="container-xxl py-5">
    <div class="container">
        <!-- Deskripsi Lokasi -->
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Lokasi Kampung</h1>
            <p><?php echo $about_loc; ?></p>
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



<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="col-lg-6">
            <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                <h1 class="mb-3">Administrasi Data Penduduk</h1>
                <p>Data statistik jumlah penduduk Kampung Pegat Bukur yang tercatat dalam sistem administrasi kependudukan desa, diperbarui secara berkala.</p>
            </div>
        </div>
        <div class="row gx-0">
            <!-- Total Penduduk -->
            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                        <i class="fa fa-users text-primary" style="font-size: 32px;"></i>
                    </div>
                    <div class="ps-4 text-start">
                        <h5 class="text-white mb-0">Total Penduduk</h5>
                        <h1 class="text-white mb-0">
                            <span class="counter" data-target="12345">0</span>
                            <small class="text-white" style="font-size: 0.5em; font-style: italic;">jiwa</small>
                        </h1>
                    </div>
                </div>
            </div>

            <!-- Jumlah KK -->
            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                        <i class="fa fa-home text-white" style="font-size: 32px;"></i>
                    </div>
                    <div class="ps-4 text-start">
                        <h5 class="text-primary mb-0">Jumlah KK</h5>
                        <h1 class="mb-0">
                            <span class="counter" data-target="3456">0</span>
                            <small class="text-muted" style="font-size: 0.5em; font-style: italic;">KK</small>
                        </h1>
                    </div>
                </div>
            </div>

            <!-- Penduduk Laki-laki -->
            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-primary shadow d-flex align-items-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                        <i class="fa fa-male text-primary" style="font-size: 32px;"></i>
                    </div>
                    <div class="ps-4 text-start">
                        <h5 class="text-white mb-0">Penduduk Laki-laki</h5>
                        <h1 class="text-white mb-0">
                            <span class="counter" data-target="6123">0</span>
                            <small class="text-white" style="font-size: 0.5em; font-style: italic;">jiwa</small>
                        </h1>
                    </div>
                </div>
            </div>

            <!-- Penduduk Perempuan -->
            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.7s">
                <div class="bg-light shadow d-flex align-items-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                        <i class="fa fa-female text-white" style="font-size: 32px;"></i>
                    </div>
                    <div class="ps-4 text-start">
                        <h5 class="text-primary mb-0">Penduduk Perempuan</h5>
                        <h1 class="mb-0">
                            <span class="counter" data-target="6222">0</span>
                            <small class="text-muted" style="font-size: 0.5em; font-style: italic;">jiwa</small>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->



    <!-- Potensi & Unggulan Kampung Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Potensi & Unggulan Kampung</h1>
                    <p>Berbagai produk dan destinasi wisata lokal unggulan hasil karya dan kekayaan alam Kampung Pegat Bukur.</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Semua</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">Pariwisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">Produk</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active p-0">
                <div class="row g-4">

                              <!-- Item Start -->
                              <?php foreach($last_ads->result() as $row4):?>

                              <div id="tab-1" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="<?php echo base_url().'assets/depan/img/ads/'.$row4->ads_image?>" alt="<?php echo $row4->ads_title;?>">
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><?php echo $row4->ads_category;?></div>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="text-primary mb-3"><?php echo $row4->ads_title;?></h5>
                                        <p class="mb-3"><?php echo $row4->ads_description;?></p>
                                        
                                        <!-- Tombol 50-50 -->
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <a href="<?php echo $row4->ads_map;?>" target="_blank" class="btn btn-outline-primary w-100 btn-sm">
                                                    <i class="fa fa-map-marker-alt me-1"></i> Lokasi
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="<?php echo $row4->ads_whatsapp;?>?text=Halo,%20saya%20tertarik%20dengan%20<?php echo $row4->ads_title;?>" target="_blank" class="btn btn-success w-100 btn-sm">
                                                    <i class="fab fa-whatsapp me-1"></i> WhatsApp
                                                </a>
                                            </div>
                                        </div>
                            
                                        <!-- Tombol Detail Produk Full Width -->
                                        <div class="mt-3">
                                            <a href="<?php echo base_url()?>unggulan-kampung/<?php echo $row4->ads_id;?>" class="btn btn-primary w-100 btn-sm">
                                                <i class="fa fa-info-circle me-1"></i> Detail Produk
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                            <!-- Item End -->
        
                            <!-- <div id="tab-2" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/destination-2.jpg" alt="Keripik Ikan Pegat Bukur">
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Produk</div>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="text-primary mb-3">Keripik Ikan</h5>
                                        <p class="mb-3">Camilan khas Pegat Bukur berbahan dasar ikan segar lokal. Renyah, gurih, dan tanpa bahan pengawet.</p> -->
                                        
                                        <!-- Tombol 50-50 -->
                                        <!-- <div class="row g-2">
                                            <div class="col-6">
                                                <a href="https://maps.google.com/?q=lokasi_produksi_keripik" target="_blank" class="btn btn-outline-primary w-100 btn-sm">
                                                    <i class="fa fa-map-marker-alt me-1"></i> Lokasi
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20Keripik%20Ikan%20Pegat%20Bukur" target="_blank" class="btn btn-success w-100 btn-sm">
                                                    <i class="fab fa-whatsapp me-1"></i> WhatsApp
                                                </a>
                                            </div>
                                        </div> -->
                            
                                        <!-- Tombol Detail Produk Full Width -->
                                        <!-- <div class="mt-3">
                                            <a href="produk-detail.html" class="btn btn-primary w-100 btn-sm">
                                                <i class="fa fa-info-circle me-1"></i> Detail Produk
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
        
                            <!-- Item Start -->
                            <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/destination-4.jpg" alt="Keripik Ikan Pegat Bukur">
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Produk</div>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="text-primary mb-3">Batik Pegat Bukur</h5>
                                        <p class="mb-3">Motif khas yang menggambarkan kehidupan pesisir, flora-fauna lokal, dan budaya Pegat Bukur.</p> -->
                                        
                                        <!-- Tombol 50-50 -->
                                        <!-- <div class="row g-2">
                                            <div class="col-6">
                                                <a href="https://maps.google.com/?q=lokasi_produksi_keripik" target="_blank" class="btn btn-outline-primary w-100 btn-sm">
                                                    <i class="fa fa-map-marker-alt me-1"></i> Lokasi
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20Keripik%20Ikan%20Pegat%20Bukur" target="_blank" class="btn btn-success w-100 btn-sm">
                                                    <i class="fab fa-whatsapp me-1"></i> WhatsApp
                                                </a>
                                            </div>
                                        </div> -->
                            
                                        <!-- Tombol Detail Produk Full Width -->
                                        <!-- <div class="mt-3">
                                            <a href="produk-detail.html" class="btn btn-primary w-100 btn-sm">
                                                <i class="fa fa-info-circle me-1"></i> Detail Produk
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            
                            <!-- Item End -->

                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.4s">
                        <a class="btn btn-primary py-3 px-5" href="<?php echo base_url()?>unggulan-kampung/">Lihat Semua Unggulan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Potensi & Unggulan Kampung End -->

        
  <!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
            <h1 class="mb-0">Berita Kampung</h1>
        </div>
        <div class="row g-5">
            <?php foreach($latest_post->result() as $row):?>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="<?php echo base_url().'assets/images/thumb/'.$row->post_image?>" alt="Post Image">                        
                        <a class="position-absolute top-0 start-0 <?php echo $row->post_category_id == 1 ? 'bg-info' : 'bg-primary' ?> text-white rounded-end mt-5 py-2 px-4" href="<?php echo site_url('category/'.$row->category_slug);?>"><?php echo $row->category_name;?></a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3">
                                <img src="<?php echo base_url().'assets/images/'.$row->user_photo;?>" alt="User Photo" style="width: 16px; height: 16px; border-radius: 50%; object-fit: cover; margin-right: 5px;">
                                <?php echo $row->user_name;?>
                            </small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo date('d M Y',strtotime($row->post_date));?></small>
                            <small><i class="like light-text text-primary me-2"></i><a href="javascript:void(0)"></a> <?php echo $row->post_views;?> views</small>
                        </div>
                        <h4 class="mb-3"><?php echo $row->post_title;?></h4>
                        <p>
                            <?php 
                            $desc = $row->post_description;
                            echo strlen($desc) > 100 ? substr($desc, 0, 100) . '...' : $desc;
                            ?>
                        </p>
                        <a class="text-uppercase" href="<?php echo site_url('blog/'.$row->post_slug);?>" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

            
        </div>
    </div>
</div>
<!-- Blog End -->


       

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
   