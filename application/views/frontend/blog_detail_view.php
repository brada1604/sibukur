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
        <?php echo $header;?>
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

                            <!-- Comment List Start -->
                            <div class="mb-3">
                                <div class="section-title mb-4">
                                    <h4 class="text-uppercase font-weight-bold m-0"><?php echo $comment; ?> Komentar</h4>
                                </div>

                                <div class="bg-white border rounded p-4 shadow-sm">
                                    
                                    <!-- komentar tanya -->
                                    <?php foreach ($show_comments->result() as $row): ?>
                                        <div class="d-flex align-items-start mb-4">
                                            <div class="flex-shrink-0">
                                                <img src="<?php echo base_url().'assets/images/'.$row->comment_image; ?>" alt="User" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover; margin-right: 10px;">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="font-weight-bold mb-1">
                                                    <a href="javascript:void(0)" class="text-dark"><?php echo $row->comment_name; ?></a>
                                                    <small class="text-muted ml-2">
                                                        <i class="far fa-clock"></i> <?php echo date('d M Y H:i:s', strtotime($row->comment_date)); ?>
                                                    </small>
                                                </h6>
                                                <p class="mb-2"><?php echo $row->comment_message; ?></p>

                                                <!-- komentar jawab -->
                                                <?php
                                                    $comment_id = $row->comment_id;
                                                    $query = $this->db->query("SELECT * FROM tbl_comment WHERE comment_status='1' AND comment_parent='$comment_id'");
                                                    foreach ($query->result() as $i) :
                                                ?>
                                                    <div class="d-flex align-items-start mt-4 pl-5">
                                                        <div class="flex-shrink-0">
                                                            <img src="<?php echo base_url().'assets/images/'.$i->comment_image; ?>" alt="User" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover; margin-right: 20px;">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="font-weight-bold mb-1">
                                                                <a href="javascript:void(0)" class="text-dark"><?php echo $i->comment_name; ?></a>
                                                                <small class="text-muted ml-2">
                                                                    <i class="far fa-clock"></i> <?php echo date('d M Y H:i:s', strtotime($i->comment_date)); ?>
                                                                </small>
                                                            </h6>
                                                            <p class="mb-2 "><?php echo $i->comment_message; ?></p>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                <!-- end komentar jawab -->

                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <!-- end komentar tanya -->

                                </div>
                            </div>
                            <!-- Comment List End -->

                            <!-- Comment Form Start -->
                            <div class="mb-3">
                                <div class="section-title mb-4">
                                    <h4 class="m-0 text-uppercase font-weight-bold">Tinggalkan Komentar</h4>
                                </div>

                                <?php echo $this->session->flashdata('msg'); ?>

                                <div class="bg-white border rounded p-4 shadow-sm">
                                    <form method="post" action="<?php echo site_url('send_comment'); ?>" role="form">
                                        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>" required>
                                        <input type="hidden" name="slug" value="<?php echo $slug; ?>" required>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nama *</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" maxlength="100" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email *</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" maxlength="100" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="comment">Komentar *</label>
                                            <textarea class="form-control" id="comment" name="comment" rows="6" placeholder="Tulis komentar Anda..." maxlength="400" required></textarea>
                                        </div>

                                        <div class="form-group text-left mt-3">
                                            <button type="submit" class="btn btn-success font-weight-bold text-uppercase px-4 py-2">
                                                Kirim Komentar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Comment Form End -->

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
   