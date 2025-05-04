<!DOCTYPE html>
<html>
    <head>
        <!-- Title -->
        <title>Sign in</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="M Fikri Setiadi" />
        <meta name="robots" content="noindex, nofollow">
        <link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon-new.png'?>">
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
    <body class="page-login">

    <!-- Section: Login -->
<section class="text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }

    .login-logo {
      width: 50%; /* Logo diperbesar */
    }

    .btn-full {
      width: 100%; /* Tombol lebar penuh */
    }
  </style>

  <div class="container py-4">
    <div class="row g-0 align-items-center">

      <!-- Form Login -->
      <div class="col-lg-6 mb-5 mb-lg-0">
      <div class="card cascading-right bg-body-tertiary shadow-lg">
          <div class="card-body p-5 shadow-5 text-start">
            
            <!-- Logo dan Deskripsi -->
            <div class="mb-4">
              <img src="<?= base_url('assets/depan/img/logo.png') ?>" alt="Logo Kampung" class="mb-3 login-logo" />
              <h4 class="fw-bold text-success">Website Resmi Kampung Pegat Bukur</h4>
              <p class="text-muted mb-0">Silakan login untuk mengakses sistem informasi kampung.</p>
            </div>

            <!-- Flash Message -->
            <?php if($this->session->flashdata('msg')): ?>
              <div class="alert alert-danger"><?= $this->session->flashdata('msg'); ?></div>
            <?php endif; ?>

            <!-- Judul -->
            <h5 class="fw-bold mb-4">Login Admin</h5>

            <!-- Form -->
            <form action="<?= site_url('backend/login/auth'); ?>" method="post">
              <!-- Username -->
              <div class="form-outline mb-4">
                <label class="form-label" for="username">Email / Username</label>
                <input type="text" id="username" name="username" class="form-control" required />
              </div>

              <!-- Password -->
              <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required />
              </div>

              <!-- Tombol -->
              <button type="submit" class="btn btn-success btn-full mb-3">Login</button>

               <!-- Copyright -->
            <div class="mt-4 text-center text-muted small">
              &copy; <?php echo date('Y'); ?> Sistem Informasi Kampung Pegat Bukur.
            </div>
             
            </form>
          </div>
        </div>
      </div>

      <!-- Gambar Samping -->
      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="<?= base_url('assets/depan/img/login.png') ?>" class="w-100 rounded-4 shadow-4" alt="Login Kampung" />
      </div>
    </div>
  </div>
</section>


	

        <!-- Javascripts -->
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