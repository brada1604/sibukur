<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $judul;?></title>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('theme/images/'.$icon);?>" rel="icon">
    

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

    <!-- SEO Tags -->
    <meta name="description" content="Kumpulan artikel <?php echo $meta_description;?> dan banyak lagi..."/>
    <link rel="canonical" href="<?php echo $canonical;?>" />
    <?php error_reporting(0); if(empty($url_prev)):?>
    <?php else:?>
    <link rel="prev" href="<?php echo $url_prev;?>" />
    <?php endif;?>
    <link rel="next" href="<?php echo $url_next;?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $judul;?>" />
    <meta property="og:description" content="Kumpulan artikel <?php echo $meta_description;?> dan banyak lagi..." />
    <meta property="og:url" content="<?php echo $canonical;?>" />
    <meta property="og:site_name" content="<?php echo $site_name;?>" />
    <meta property="og:image" content="<?php echo base_url().'theme/images/'.$site_image?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url().'theme/images/'.$site_image?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Kumpulan artikel <?php echo $meta_description;?> dan banyak lagi..." />
    <meta name="twitter:title" content="<?php echo $judul;?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter;?>" />
    <meta name="twitter:image" content="<?php echo base_url().'theme/images/'.$site_image?>" />
    <!-- / SEO plugin. -->
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
                        <h1 class="display-5 animated fadeIn mb-3">Berita Kampung</h1>
                        <p class="animated fadeIn text-muted">
                            Temukan kabar terbaru seputar kegiatan, pengumuman, serta informasi penting lainnya dari Kampung Pegat Bukur. Bersama kita wujudkan kampung yang maju, transparan, dan terhubung.
                        </p>
                    </div>
               
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
    
    
             <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <?php foreach ($data->result() as $row):?>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/images/thumb/'.$row->post_image;?>" alt="">
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
                                    <a class="text-uppercase" href="<?php echo site_url('blog/'.$row->post_slug);?>" target="_blank">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
    
                        <!-- <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/blog-2.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Wisata</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>20 April, 2025</small>
                                    </div>
                                    <h4 class="mb-3">Menjelajahi Tempat Wisata Tersembunyi di Pegat Bukur</h4>
                                    <p>Dari pemandangan alam yang menakjubkan hingga warisan budaya, Pegat Bukur adalah rumah bagi beberapa tempat wisata yang indah dan belum banyak ditemukan.</p>
                                    <a class="text-uppercase" href="blog-detail.html">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> -->
    
                        <!-- Posting Blog Lainnya -->
                        <!-- <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/blog-3.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Produk Lokal</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>18 April, 2025</small>
                                    </div>
                                    <h4 class="mb-3">Mendukung Ekonomi Lokal: Produk dari Pegat Bukur</h4>
                                    <p>Jelajahi barang-barang kerajinan tangan unik dan produk lokal dari Pegat Bukur. Barang-barang ini adalah bukti keterampilan dan kreativitas warga kampung kami.</p>
                                    <a class="text-uppercase" href="blog-detail.html">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> -->
    
                        <!-- <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/blog-1.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Acara Budaya</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>15 April, 2025</small>
                                    </div>
                                    <h4 class="mb-3">Merayakan Festival Lokal di Pegat Bukur</h4>
                                    <p>Bergabunglah dengan kami dalam acara budaya tahunan yang menampilkan tradisi kaya kampung kami. Dari pertunjukan tari hingga festival kuliner, ada sesuatu untuk semua orang!</p>
                                    <a class="text-uppercase" href="blog-detail.html">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> -->
    
                        <!-- <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="<?php echo base_url()?>assets/depan/img/blog-2.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Pengembangan Komunitas</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>12 April, 2025</small>
                                    </div>
                                    <h4 class="mb-3">Memberdayakan Pegat Bukur: Inisiatif Pengembangan Komunitas</h4>
                                    <p>Temukan bagaimana proyek berbasis komunitas sedang mentransformasi Pegat Bukur, mulai dari program pendidikan hingga pembangunan infrastruktur.</p>
                                    <a class="text-uppercase" href="blog-detail.html">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> -->
    
                        <!-- Pagination Start -->
                        <!--pagination-->
						<?php echo $page;?>
                        <!-- <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
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
                        </div> -->
                        <!-- Pagination End -->
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
   