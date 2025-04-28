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
                        <h1 class="display-5 animated fadeIn mb-4">Statistik Kampung</h1>
                        <p class="animated fadeIn">
                        Halaman ini menyajikan informasi penting yang dapat diakses oleh masyarakat umum, 
                        mencakup data kependudukan, laporan keuangan desa, rencana pembangunan, dan berbagai kebijakan desa lainnya yang transparan dan akuntabel.
                        </p>
                    </div>
                </div>
    
                <!-- Right Column (Image) -->
                <div class="col-lg-6">
                    <div class="h-100 w-100">
                        <img src="<?php echo base_url()?>assets/depan/img/about.jpg" alt="Tentang Kami" 
                            class="img-fluid rounded shadow" 
                            style="object-fit: cover; height: 100%; width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Header End -->

        
<!-- About Start -->
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-5" style="min-height: 500px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo base_url()?>assets/depan/img/about.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="position-relative pb-3">
                                <h5 class="fw-bold text-primary text-uppercase">Penduduk</h5>
                                <h1 class="mb-0">Jumlah Penduduk & Kepala Keluarga</h1>
                                <p class="animated fadeIn">
                                    Desa Pegat Bukur memiliki jumlah penduduk yang terus bertambah dengan sebaran usia yang beragam. Data kepala keluarga menjadi dasar dalam perencanaan program desa dan pelayanan masyarakat secara merata dan efektif.
                                </p>
                            </div>
                            <div class="container py-5 pt-lg-0">
                                <div class="row gx-0">
                                    <!-- Total Penduduk -->
                                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
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
                                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                                        <div class="bg-light shadow d-flex align-items-center p-4" style="height: 150px;">
                                            <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                                                <i class="fa fa-home text-white" style="font-size: 32px;"></i>
                                            </div>
                                            <div class="ps-4 text-start">
                                                <h5 class="text-primary mb-0">Jumlah KK</h5>
                                                <h1 class="text-primary mb-0">
                                                    <span class="counter" data-target="3456">0</span>
                                                    <small class="text-primary" style="font-size: 0.5em; font-style: italic;">KK</small>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                 
                                </div>
                                <div class="row gx-0">
                                   <!-- Penduduk Laki-laki -->
                                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.5s">
                                        <div class="bg-light shadow d-flex align-items-center p-4" style="height: 150px;">
                                            <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                                                <i class="fa fa-male text-white" style="font-size: 32px;"></i>
                                            </div>
                                            <div class="ps-4 text-start">
                                                <h5 class="text-primary mb-0">Laki-laki</h5>
                                                <h1 class="text-primary mb-0">
                                                    <span class="counter" data-target="6123">0</span>
                                                    <small class="text-primary" style="font-size: 0.5em; font-style: italic;">jiwa</small>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
        
                                    <!-- Penduduk Perempuan -->
                                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.7s">
                                        <div class="bg-primary shadow d-flex align-items-center p-4" style="height: 150px;">
                                            <div class="bg-white d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                                                <i class="fa fa-female text-primary" style="font-size: 32px;"></i>
                                            </div>
                                            <div class="ps-4 text-start">
                                                <h5 class="text-white mb-0">Perempuan</h5>
                                                <h1 class="text-white mb-0">
                                                    <span class="counter" data-target="6222">0</span>
                                                    <small class="text-white" style="font-size: 0.5em; font-style: italic;">jiwa</small>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                    </div>
                </div>
            </div>
<!-- About End -->
                        

            <!-- Statistik Penduduk Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <!-- Penduduk per RT -->
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="position-relative pb-3">
                    <h5 class="fw-bold text-primary text-uppercase">Penduduk</h5>
                    <h1 class="mb-3">Jumlah Penduduk Menurut RT</h1>
                    <p>Data berikut menampilkan distribusi jumlah penduduk Desa Pegat Bukur berdasarkan Rukun Tetangga (RT). Statistik ini digunakan sebagai dasar pengambilan keputusan dalam program pembangunan dan pelayanan masyarakat.</p>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-center">
                <div class="bg-light text-center rounded p-4 w-100 shadow-sm">
                    <h6 class="mb-4">Grafik Distribusi Penduduk per RT</h6>
                    <canvas id="chart-penduduk-rt" style="max-width: 100%; height: 300px;"></canvas>
                </div>
            </div>
        </div>

        <!-- Data Sosial, Ekonomi & Pendidikan -->
        <div class="row g-5 mt-5">
            <div class="col-12 text-center">
                <h5 class="fw-bold text-primary text-uppercase">Penduduk</h5>
                <h1 class="mb-3">Data Sosial, Ekonomi & Pendidikan</h1>
                <p>Berikut adalah data yang menggambarkan kondisi sosial, ekonomi, usia produktif, serta tingkat pendidikan masyarakat di Desa Pegat Bukur.</p>
            </div>

            <div class="col-md-6">
                <div class="bg-light rounded p-4 shadow-sm">
                    <h5 class="text-center mb-4">Usia Produktif Penduduk</h5>
                    <p class="text-center text-muted small mb-4">Menunjukkan jumlah penduduk usia produktif (15–64 tahun) yang menjadi tulang punggung kegiatan ekonomi dan pembangunan desa.</p>
                    <canvas id="chart-usia" height="300"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-light rounded p-4 shadow-sm">
                    <h5 class="text-center mb-4">Kondisi Ekonomi</h5>
                    <p class="text-center text-muted small mb-4">Menggambarkan kategori tingkat penghasilan atau kondisi ekonomi rumah tangga di Desa Pegat Bukur.</p>
                    <canvas id="chart-ekonomi" height="300"></canvas>
                </div>
            </div>
        </div>

        <!-- Pekerjaan & Pendidikan -->
        <div class="row g-5 mt-5">
            <div class="col-md-6">
                <div class="bg-light rounded p-4 shadow-sm">
                    <h5 class="mb-4 text-center">Pekerjaan Penduduk</h5>
                    <p class="text-center text-muted small mb-4">Distribusi penduduk berdasarkan jenis pekerjaan seperti petani, nelayan, pedagang, PNS, buruh, dan lainnya.</p>
                    <canvas id="chart-pekerjaan" height="300"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-light rounded p-4 shadow-sm">
                    <h5 class="mb-4 text-center">Tingkat Pendidikan</h5>
                    <p class="text-center text-muted small mb-4">Menunjukkan capaian pendidikan terakhir penduduk, mulai dari tidak sekolah hingga pendidikan tinggi.</p>
                    <canvas id="chart-pendidikan" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Statistik Penduduk End -->




       

<!-- footer start  -->
      <?php echo $footer;?>
<!-- footer end -->

 

<!-- 1. jQuery dulu -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- 2. jQuery Easing -->
<script src="<?php echo base_url()?>assets/depan/lib/easing/easing.min.js"></script>

<!-- 3. Plugin dan Library lain -->
<script src="<?php echo base_url()?>assets/depan/lib/chart/chart.min.js"></script>
<script src="<?php echo base_url()?>assets/depan/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url()?>assets/depan/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url()?>assets/depan/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- 4. Custom JS kamu -->
<script src="<?php echo base_url()?>assets/depan/js/main.js"></script>
</body>

</html>
   