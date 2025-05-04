

<section id="footer" class="container-fluid bg-dark text-white-50 pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <footer id="footer-section" class="px-4 px-md-5">
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
                    <a class="btn btn-link text-white-50" href="<?php echo base_url()?>about">Profil Desa</a>
                    <a class="btn btn-link text-white-50" href="<?php echo base_url()?>blog">Berita & Kegiatan</a>
                    <a class="btn btn-link text-white-50" href="<?php echo base_url()?>data-kampung">Statistik Penduduk</a>
                    <a class="btn btn-link text-white-50" href="<?php echo base_url()?>ads">Produk UMKM</a>
                    <a class="btn btn-link text-white-50" href="<?php echo base_url()?>galery">Galeri</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Galeri Desa</h5>
                    <div class="row g-2 pt-2">
                        <?php foreach($footer_galery->result() as $row_z):?>
                        <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/galery/<?php echo $row_z->galery_image;?>" alt=""></div>
                        <?php endforeach;?>
                        <!-- <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-2.jpg" alt=""></div> -->
                        <!-- <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-3.jpg" alt=""></div> -->
                        <!-- <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-4.jpg" alt=""></div> -->
                        <!-- <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-5.jpg" alt=""></div> -->
                        <!-- <div class="col-4"><img class="img-fluid rounded bg-light p-1" src="<?php echo base_url()?>assets/depan/img/destination-6.jpg" alt=""></div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <form class="form-inline" action="<?php echo site_url('subscribe');?>" method="post">
                    <h5 class="text-white mb-4">Berlangganan Info</h5>
                    <p>Dapatkan info terbaru seputar desa Pegat Bukur langsung ke email Anda.</p>
                    <div class="position-relative" style="max-width: 400px;">
                        <input type="hidden" name="url" value="<?php echo site_url();?>" required>
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="email" placeholder="Email Anda" name="email" required >
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Daftar</button>
                    </div>
                    </form> 
                </div>
                <div><?php echo $this->session->flashdata('message');?></div>
            </div>
            <hr class="text-secondary mt-5">

            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="text-white" href="#">Desa Pegat Bukur <?php echo date('Y');?></a> | All Rights Reserved.
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
    </footer>
</section>