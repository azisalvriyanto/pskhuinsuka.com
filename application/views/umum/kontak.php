<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("umum/_partials/head.php") ?>
    
    <link href="<?= base_url("assets/umum/") ?>css/contact.css" rel='stylesheet' type='text/css' />

    <style>
        .text-wrap {
            word-wrap: break-word; 
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php $this->load->view("umum/_partials/header.php") ?>

    <!-- //header -->
    
    <!-- breadcrumb -->
    <?php $this->load->view("umum/_partials/breadcrumb.php") ?>

    <!-- //breadcrumb -->
    
    <!-- field -->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Kontak Kami</h3>

            <div class="row inner-sec-wthree"><?php if ($organisasi["kontak"]["peta"]) { ?>
                <div class="contact-map">
                    <iframe src="<?= $organisasi["kontak"]["peta"] ?>" class="map" style="border:0" allowfullscreen=""></iframe>
                </div><?php } ?>

                <div class="col-sm-4" style="padding: 10px;">
                    <div class="icon_info" style="background: black; height: 100%;">
                        <div class="bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                            <div class="bt-icon">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                            <br>
                            <h3 class="sub-tittle" style="color: white;">Alamat</h3>
                            <p class="text-wrap"><?= !empty($organisasi["kontak"]["alamat"]) ? $organisasi["kontak"]["alamat"] : "-"  ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="padding: 10px;">
                    <div class="icon_info" style="background: black; height: 100%;">
                        <div class="bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                            <div class="bt-icon">
                                <span class="fas fa-phone-volume"></span>
                            </div>
                            <br>
                            <h3 class="sub-tittle" style="color: white;">Telepon</h3>
                            <p class="text-wrap"><?= !empty($organisasi["kontak"]["telepon"]) ? $organisasi["kontak"]["telepon"] : "-"  ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="padding: 10px;">
                    <a href="mailto:<?= !empty($organisasi["kontak"]["email"]) ? $organisasi["kontak"]["email"] : ""  ?>">
                        <div class="icon_info" style="background: black; height: 100%;">
                            <div class="bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                                <div class="bt-icon">
                                    <span class="far fa-envelope"></span>
                                </div>
                                <br>
                                <h3 class="sub-tittle" style="color: white;">Email</h3>
                                <p class="text-wrap"><?= !empty($organisasi["kontak"]["email"]) ? $organisasi["kontak"]["email"] : "-"  ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4" style="padding: 10px;">
                    <a href="//www.facebook.com/<?= !empty($organisasi["kontak"]["facebook"]) ? $organisasi["kontak"]["facebook"] : ""  ?>">
                        <div class="icon_info" style="background: black; height: 100%;">
                            <div class="bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                                <div class="bt-icon" style>
                                    <span class="fab fa-facebook-f"></span>
                                </div>
                                <br>
                                <h3 class="sub-tittle" style="color: white;">Facebook</h3>
                                <p class="text-wrap">www.facebook.com/<?= !empty($organisasi["kontak"]["facebook"]) ? $organisasi["kontak"]["facebook"] : ""  ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4" style="padding: 10px;">
                    <a href="//www.twitter.com/<?= !empty($organisasi["kontak"]["twitter"]) ? $organisasi["kontak"]["twitter"] : ""  ?>">
                        <div class="icon_info" style="background: black; height: 100%;">
                            <div class="bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                                <div class="bt-icon" style>
                                    <span class="fab fa-twitter"></span>
                                </div>
                                <br>
                                <h3 class="sub-tittle" style="color: white;">Twitter</h3>
                                <p class="text-wrap">www.twitter.com/<?= !empty($organisasi["kontak"]["twitter"]) ? $organisasi["kontak"]["twitter"] : ""  ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4" style="padding: 10px;">
                    <a href="//www.instagram.com/channel/<?= !empty($organisasi["kontak"]["instagram"]) ? $organisasi["kontak"]["instagram"] : ""  ?>">
                        <div class="icon_info" style="background: black; height: 100%;">
                            <div class="bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                                <div class="bt-icon" style>
                                    <span class="fab fa-instagram"></span>
                                </div>
                                <br>
                                <h3 class="sub-tittle" style="color: white;">Instagram</h3>
                                <p class="text-wrap">www.instagram.com/<?= !empty($organisasi["kontak"]["instagram"]) ? $organisasi["kontak"]["instagram"] : ""  ?></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="contact_grid_right">
                    <br><br>
                    <h2>Silakan isi formulir ini untuk berkomunikasi dengan kami.</h2>
                    <form action="" method="POST">
                        <div class="contact_left_grid">
                            <input type="text" name="nama" placeholder="Nama" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="text" name="judul" placeholder="Judul" required="">
                            <textarea name="pesan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pesan...';}" required="">Pesan...</textarea>
                            <input type="submit" value="Kirim">
                            <input type="reset" value="Clear">
                            <div class="clearfix"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="flexslider">
       	<ul class="slides">
        	<li>
                <div class="testimonials_grid">
                    <p><br><br><br></p>
                </div>
            </li>
        </ul>
    </div>
    <!-- //field -->

    <!-- footer -->
    <?php $this->load->view("umum/_partials/footer.php") ?>

    <!-- //footer -->

    <!-- copyright -->
    <?php $this->load->view("umum/_partials/copyright.php") ?>

    <!-- //copyright -->

    <!-- javascript -->
    <?php $this->load->view("umum/_partials/javascript.php") ?>

    <!-- //javascript -->
</body>

</html>