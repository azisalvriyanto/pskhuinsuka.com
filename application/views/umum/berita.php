<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("umum/_partials/head.php") ?>

    <link href="<?= base_url("assets/umum/") ?>css/blog.css" rel="stylesheet" type="text/css" />
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
            <h3 class="tittle">Berita</h3>
            <div class="row inner-sec-wthree">
                <article class="row align-items-center icon_info" style="padding: 0em 0em 1em 0em; margin: 1em;">
                    <div class="col-md-4 section_1_gallery_grid" data-aos="fade-right">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g1.jpg">
                            <img src="<?= base_url("assets/umum/") ?>/images/g1.jpg" alt="" class="img-fluid"  style="padding"/>
                            <div class="proj_gallery_grid1_pos">
                                <h3>Smelter</h3>
                                <p>Add some text</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8" data-aos="fade-left">
                        <h5 style="font-size: 24pt;">sdcsdcsdcsdcsd sd sdcdcsd sdc</h5>
                        <p>
                            Dipublikasi oleh
                            <a href="#" class="user-blog">Ratih N.F</a>
                        </p>
                        <ul class="blog_list_info">
                            <li>
                                <a href="#">
                                    <span class="fa fa-tag" aria-hidden="true"></span>
                                    July 3,2018
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="row align-items-center icon_info" style="padding: 0em 0em 1em 0em; margin: 1em;">
                    <div class="col-md-4 section_1_gallery_grid" data-aos="fade-right">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g1.jpg">
                            <img src="<?= base_url("assets/umum/") ?>/images/g1.jpg" alt="" class="img-fluid"  style="padding"/>
                            <div class="proj_gallery_grid1_pos">
                                <h3>Smelter</h3>
                                <p>Add some text</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8" data-aos="fade-left">
                        <h5 style="font-size: 24pt;">Sadipisci velit sed quia non nuuamsdvsdvdf dfvdsfbdfs fdbsbfgbgf fbdfgbfd fdg df.</h5>
                        <p>
                            Dipublikasi oleh
                            <a href="#" class="user-blog">Alvriyanto Azis</a>
                        </p>
                        <ul class="blog_list_info">
                            <li>
                                <a href="#">
                                    <span class="fa fa-tag" aria-hidden="true"></span>
                                    July 3,2018
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>

            <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
        </div>
    </section>

    <div class="flexslider">
       	<ul class="slides">
        	<li>
                <div class="testimonials_grid">
                    <p><br><br><br><br><br></p>
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