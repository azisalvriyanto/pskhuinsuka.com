<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("umum/_partials/head.php") ?>
    
    <link href="<?= base_url("assets/umum/") ?>css/contact.css" rel='stylesheet' type='text/css' />
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


                <div class="address row" style="margin-bottom: 1em">
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Alamat</h6>
                                <p><?= !empty($organisasi["kontak"]["alamat"]) ? $organisasi["kontak"]["alamat"] : ""  ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-phone-volume" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Nomor Telepon</h6>
                                <p><?= !empty($organisasi["kontak"]["telepon"]) ? $organisasi["kontak"]["telepon"] : ""  ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="far fa-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Email</h6>
                                <a href="mailto:<?= !empty($organisasi["kontak"]["email"]) ? $organisasi["kontak"]["email"] : ""  ?>">
                                    <p><?= !empty($organisasi["kontak"]["email"]) ? $organisasi["kontak"]["email"] : ""  ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="address row" style="margin-top: 1em">
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fab fa-facebook-f" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Facebook</h6>
                                <a href="//www.facebook.com/<?= !empty($organisasi["kontak"]["facebook"]) ? $organisasi["kontak"]["facebook"] : ""  ?>">
                                    <p>www.facebook.com/<?= !empty($organisasi["kontak"]["facebook"]) ? $organisasi["kontak"]["facebook"] : ""  ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fab fa-twitter" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Twitter</h6>
                                <a href="//www.twitter.com/<?= !empty($organisasi["kontak"]["twitter"]) ? $organisasi["kontak"]["twitter"] : ""  ?>">
                                    <p>www.twitter.com/<?= !empty($organisasi["kontak"]["twitter"]) ? $organisasi["kontak"]["twitter"] : ""  ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fab fa-instagram" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Instagram</h6>
                                <a href="//www.instagram.com/<?= !empty($organisasi["kontak"]["instagram"]) ? $organisasi["kontak"]["instagram"] : ""  ?>">
                                    <p>www.instagram.com/<?= !empty($organisasi["kontak"]["instagram"]) ? $organisasi["kontak"]["instagram"] : ""  ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
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