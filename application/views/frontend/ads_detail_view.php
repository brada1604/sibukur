<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $site_title;?></title>
    
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

        <section class="container my-5">
            <div class="row align-items-start">
                <!-- Carousel Produk -->
                <div class="col-lg-6 mb-4">
                    <div class="owl-carousel header-carousel rounded overflow-hidden shadow-sm">
                        <div class="owl-carousel-item">
                            <img class="img-fluid w-100 object-fit-cover" src="<?php echo base_url().'assets/depan/img/ads/'.$image ?>" alt="Gambar Produk 1">
                        </div>
                        <!-- Contoh item tambahan (jika diperlukan) -->
                        <!-- <div class="owl-carousel-item">
                            <img class="img-fluid w-100 object-fit-cover" src="<?php echo base_url()?>assets/depan/img/carousel-2.png" alt="Gambar Produk 2">
                        </div> -->
                    </div>
                </div>

                <!-- Informasi Produk -->
                <div class="col-lg-6">
                    <h2 class="font-weight-bold mb-2"><?php echo $title; ?></h2>
                    <h3 class="text-success font-weight-bold">
                        <?php
                            $harga1 = str_replace(',', '.', $price);
                            $harga1 = floatval($harga1);
                            echo 'Rp ' . number_format($harga1, (fmod($harga1, 1) > 0 ? 2 : 0), ',', '.');
                        ?>
                    </h3>

                    <!-- Detail Produk -->
                    <div class="mt-4">
                        <ul class="list-group list-group-flush border rounded shadow-sm">
                            <li class="list-group-item">
                                <i class="fas fa-tag text-primary mr-2"></i><strong>Nama:</strong> <?php echo $title; ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-layer-group text-warning mr-2"></i><strong>Kategori:</strong> <?php echo $category; ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-money-bill-wave text-success mr-2"></i><strong>Harga:</strong>
                                <?php
                                    $harga2 = str_replace(',', '.', $price);
                                    $harga2 = floatval($harga2);
                                    echo 'Rp ' . number_format($harga2, (fmod($harga2, 1) > 0 ? 2 : 0), ',', '.');
                                ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-align-left text-info mr-2"></i><strong>Deskripsi:</strong> <?php echo $description; ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-phone-alt text-danger mr-2"></i><strong>Kontak:</strong> <?php echo $contact; ?>
                            </li>
                        </ul>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="mt-3">
                        <div class="row g-2">
                            <div class="col-6">
                                <a href="<?php echo $map; ?>" target="_blank" class="btn btn-outline-primary w-100 btn-sm">
                                    <i class="fa fa-map-marker-alt me-1"></i> Lokasi
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="<?php echo $whatsapp; ?>?text=Halo,%20saya%20tertarik%20dengan%20<?php echo urlencode($title); ?>" target="_blank" class="btn btn-success w-100 btn-sm">
                                    <i class="fab fa-whatsapp me-1"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Informasi -->
                    <div class="mt-3">
                        <ul class="nav nav-tabs" id="infoTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab">Deskripsi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ulasan-tab" data-toggle="tab" href="#ulasan" role="tab">Ulasan</a>
                            </li>
                        </ul>

                        <div class="tab-content p-3 bg-light border rounded-bottom" id="infoTabContent">
                            <div class="tab-pane fade show active" id="deskripsi" role="tabpanel">
                                <p><?php echo $description; ?></p>
                            </div>
                            <div class="tab-pane fade" id="ulasan" role="tabpanel">
                                <p>Belum ada ulasan. Jadilah yang pertama memberikan ulasan!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produk Lainnya -->
        <section class="bg-white py-5">
            <div class="container">
                <h4 class="mb-4">Produk Lainnya</h4>
                <div class="owl-carousel related-carousel">
                    <div class="item p-3 border rounded text-center">
                        <img src="<?php echo base_url() ?>assets/depan/img/destination-1.jpg" class="img-fluid mb-2" alt="Produk">
                        <h6>Gula Aren Asli</h6>
                        <p class="text-success">Rp 20.000</p>
                    </div>
                    <div class="item p-3 border rounded text-center">
                        <img src="<?php echo base_url() ?>assets/depan/img/destination-2.jpg" class="img-fluid mb-2" alt="Produk">
                        <h6>Tenun Tradisional</h6>
                        <p class="text-success">Rp 150.000</p>
                    </div>
                </div>
            </div>
        </section>



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
