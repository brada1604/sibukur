<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    
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

    <link href="<?php echo base_url().'theme/css/jssocials.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'theme/css/jssocials-theme-flat.css'?>" rel="stylesheet">

    <!-- SEO Tags -->
    <meta name="description" content="<?php echo $description;?>"/>
    <link rel="canonical" href="<?php echo site_url('blog/'.$slug);?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $title;?>" />
    <meta property="og:description" content="<?php echo $description;?>" />
    <meta property="og:url" content="<?php echo site_url('blog/'.$slug);?>" />
    <meta property="og:site_name" content="<?php echo $site_name;?>" />
    <meta property="article:publisher" content="<?php echo $site_facebook;?>" />
    <meta property="article:section" content="<?php echo $category;?>" />
    <meta property="og:image" content="<?php echo base_url().'assets/images/'.$image;?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url().'assets/images/'.$image;?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?php echo $description;?>" />
    <meta name="twitter:title" content="<?php echo $title;?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter;?>" />
    <meta name="twitter:image" content="<?php echo base_url().'assets/images/'.$image;?>" />
    <!-- / End SEO Tags. -->
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
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0">
        <div class="container px-4"> <!-- Tambahan container di dalam nav -->
            <a href="<?php echo base_url()?>" class="navbar-brand">
                <img src="<?php echo base_url()?>assets/depan/img/LOGO PEGAT BUKUR.png" alt="Logo" style="height: 100%;">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.html" class="nav-item nav-link ">Beranda</a>
                    <a href="about.html" class="nav-item nav-link">Profil</a>
                    <a href="data-kampung.html" class="nav-item nav-link">Data Kampung</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="berita.html" class="dropdown-item active">Berita Kampung</a>
                            <a href="lampiran.html" class="dropdown-item">Lampiran</a>
                        </div>
                    </div>
                    <a href="unggulan-kampung.html" class="nav-item nav-link">Unggulan Kampung</a>
                    <a href="galeri.html" class="nav-item nav-link">Galeri</a>
                </div>
            </div>
        </div> <!-- End container -->
    </nav>
</div>
<!-- Navbar End -->

     <!-- Blog Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
             <!-- Blog Detail Start -->
<div class="mb-5">
    <!-- Gambar Utama -->
    <img class="img-fluid w-100 rounded mb-4 shadow-sm" src="<?php echo base_url().'assets/images/'.$image;?>" alt="<?php echo $title;?>">

    <!-- Informasi Meta -->
    <div class="mb-3 d-flex flex-wrap text-muted small">
        <div class="me-4 mb-2">
            <a href="#"> 
                <i class="far fa-calendar-alt me-1"></i> <?php echo date('d M Y',strtotime($date));?>
            </a>
        </div>
        <div class="me-4 mb-2">
            <a href="#"> 
                <i class="far fa-user me-1"></i> <?php echo $author;?>
            </a>
        </div>
        <div class="me-4 mb-2">
            <a href="<?php echo site_url('category/'.$row2->category_slug);?>" target="_blank">
                <i class="far fa-folder-open me-1"></i> <?php echo $category;?>
            </a>
        </div>
        <div class="me-4 mb-2">
            <a href="#">
                <i class="far fa-eye me-1"></i> <?php echo number_format($views).' views';?>
            </a>
        </div>
        <div class="me-4 mb-2">
            <a href="#">
                <i class="fa fa-comments"></i> <?php echo number_format($comment);?> Comments
            </a>
        </div>
    </div>

    <!-- Judul Berita -->
    <h1 class="mb-4"><?php echo $title;?></h1>

    <!-- Isi Berita -->
    <?php echo $content;?>
</div>
<!-- Blog Detail End -->

<!--POST TAG-->
<div class="post-meta-section clearfix">

    <div class="float-left font-face1 post-meta-holder nomargin">TAGS &mdash; 
        <?php 
        $split_tag=explode(",", $tags);
        foreach ($split_tag as $tag) : 
            ?>
            <a href="<?php echo site_url('tag/'.$tag);?>"><?php echo $tag;?></a> &vert;
        <?php endforeach;?>
    </div>

    <!-- <div class="float-right">   
        <div class="SocialShareArticle" style="color: #fff;font-size: 10px;"></div>
    </div> -->

</div>

<!-- Tombol Share Start -->
<div class="mt-4">
    <h6 class="mb-3">Bagikan Artikel:</h6>
    <div class="d-flex">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url('blog/'.$post_slug);?>" 
           target="_blank" class="btn btn-sm btn-primary me-2">
            <i class="fab fa-facebook-f me-1"></i> Facebook
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo site_url('blog/'.$post_slug);?>" 
           target="_blank" class="btn btn-sm btn-info me-2 text-white">
            <i class="fab fa-twitter me-1"></i> Twitter
        </a>
        <a href="https://wa.me/?text=<?php echo site_url('blog/'.$post_slug);?>" 
           target="_blank" class="btn btn-sm btn-success me-2">
            <i class="fab fa-whatsapp me-1"></i> WhatsApp
        </a>
        <a href="mailto:?subject=Kegiatan Gotong Royong di Pegat Bukur&body=Lihat artikel ini: <?php echo site_url('blog/'.$post_slug);?>" 
           class="btn btn-sm btn-secondary">
            <i class="fas fa-envelope me-1"></i> Email
        </a>
    </div>
</div>
<!-- Tombol Share End -->

    
             
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Form Pencarian Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <form action="<?php echo site_url('search');?>" method="GET">
                            <div class="input-group">
                                <input type="text" name="search_query" class="form-control p-3" placeholder="Cari berita...">
                                <button class="btn btn-primary px-4" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Form Pencarian End -->
    
                    <!-- Kategori Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Kategori</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <?php foreach ($data_all_categories_by_name->result() as $row2):?>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?php echo site_url('category/'.$row2->category_slug);?>"><i class="bi bi-arrow-right me-2"></i><?php echo $row2->category_name;?></a>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <!-- Kategori End -->
    
                    <!-- Postingan Terbaru Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Postingan Terbaru</h3>
                        </div>
                        <?php foreach ($data_last_post->result() as $row1):?>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="<?php echo base_url().'assets/images/thumb/'.$row1->post_image;?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="<?php echo site_url('blog/'.$row1->post_slug);?>" target="_blank" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"><?php echo $row1->post_title;?></a>
                        </div>
                        <?php endforeach;?>
                        <!-- Ulangi untuk posting lainnya -->
                    </div>
                    <!-- Postingan Terbaru End -->
    
                    <!-- Tag Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag</h3>
                        </div>
                        <div class="d-flex flex-wrap">
                            <?php foreach ($data_all_tags_by_name->result() as $row3):?>
                            <a href="<?php echo site_url('tag/'.$row3->tag_name);?>" target="_blank" class="btn btn-sm btn-outline-primary m-1"><?php echo $row3->tag_name;?></a>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <!-- Tag End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
    

        <!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="px-4 px-md-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Hubungi Kami</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Desa Pegat Bukur, Kec. Sambaliung, Kab. Berau, Kalimantan Timur</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 812-3456-7890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>pegatbukur@desa.id</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Tautan Cepat</h5>
                <a class="btn btn-link text-white-50" href="#">Profil Desa</a>
                <a class="btn btn-link text-white-50" href="#">Berita & Kegiatan</a>
                <a class="btn btn-link text-white-50" href="#">Statistik Penduduk</a>
                <a class="btn btn-link text-white-50" href="#">Produk UMKM</a>
                <a class="btn btn-link text-white-50" href="#">Galeri</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Galeri Desa</h5>
                <div class="row g-2 pt-2">
                    <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-1.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-1.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-1.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-1.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-1.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-1.jpg" alt=""></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Berlangganan Info</h5>
                <p>Dapatkan info terbaru seputar desa Pegat Bukur langsung ke email Anda.</p>
                <div class="position-relative" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="email" placeholder="Email Anda">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Daftar</button>
                </div>
            </div>
        </div>

        <hr class="text-secondary mt-5">

        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="text-white" href="#">Desa Pegat Bukur</a> | All Rights Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                    <a href="#" class="text-white-50 me-3">Beranda</a>
                    <a href="#" class="text-white-50 me-3">Syarat</a>
                    <a href="#" class="text-white-50 me-3">Kebijakan</a>
                    <a href="#" class="text-white-50">Kontak</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

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
<script src="<?php echo base_url('theme/js/jssocials.min.js')?>"></script>  
<script>
    $(document).ready(function(){
        $(".SocialShareArticle").jsSocials({
            showCount: false,
            showLabel: true,
            shareIn: "popup",
            shares: [
                { share: "twitter", label: "Twitter" },
                { share: "facebook", label: "Facebook" },
                { share: "whatsapp", label: "WhatsApp" },
                { share: "linkedin", label: "Linked In" }
            ]
        });
    });
</script>
</body>

</html>
   