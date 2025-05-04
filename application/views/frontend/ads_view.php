<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kampung Pegat Bukur</title>
    
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

    
    <!-- Tentang Kampung Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-stretch">
            <!-- Teks Deskripsi -->
            <div class="col-lg-4 d-flex flex-column justify-content-between">
                <div>
                    <h1 class="display-5 animated fadeIn mb-4">Potensi Unggulan</h1>
                    <p class="animated fadeIn">
                        Desa Pegat Bukur memiliki beragam potensi unggulan yang menjadi kebanggaan masyarakat. Dari sektor perikanan, pertanian, hingga pariwisata alam, kampung ini terus berkembang sebagai desa yang mandiri dan produktif.
                    </p>
                </div>
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Profil</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Potensi Unggulan</li>
                    </ol>
                </nav>
            </div>

            <!-- Gambar -->
            <div class="col-lg-8">
                <div class="h-100 w-100">
                    <img src="<?php echo base_url()?>assets/depan/img/about.png" alt="Potensi Unggulan Desa Pegat Bukur" 
                         class="img-fluid rounded shadow" 
                         style="height: 100%; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tentang Kampung End -->


    <!-- Potensi & Unggulan Kampung Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-0 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
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
                <div id="tab-1" class="tab-pane fade show active p-0">
                    <div class="row g-4">

                    <!-- Item Start -->
                              <?php foreach($list_ads->result() as $row4):?>

                              <div id="tab-1" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="<?php echo base_url().'<?php echo base_url()?>assets/depan/img/ads/'.$row4->ads_image?>" alt="<?php echo $row4->ads_title;?>">
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

                    <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
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
              
    
                      
                          <!-- Pagination Start -->
             <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg m-0">
                        <li class="page-item disabled">
                            <a class="page-link rounded-0" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link rounded-0" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination End -->
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Potensi & Unggulan Kampung End -->


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
   