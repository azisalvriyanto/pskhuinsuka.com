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
            <h3 class="tittle">Artikel</h3>
            <div class="row inner-sec-wthree">
                <div class="col-lg-8 blog-sp" data-aos="zoom-in">
                    <article class="blog-x row">
                        <div class="col-md-6 blog-img">
                            <a href="single.html">
								<img src="<?= base_url("assets/umum/") ?>images/b1.jpg" alt="" class="img-responsive" />
							</a>
                        </div>
                        <div class="col-md-6 blog_info">
                            <h5>Sadipisci velit sed quia non nuuam.</h5>
                            <p>
                                By
                                <a href="#" class="user-blog">James</a>
                            </p>
                            <p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
                            <ul class="blog_list_info">
                                <li>
                                    <a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
                                        173
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
                                        10
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
                                        5
                                    </a>
                                </li>
                            </ul>
                            <h4>July 3,2018</h4>
                        </div>

                    </article>
                    <article class="blog-x br-mar row">
                        <div class="col-md-6 blog_info">
                            <h5>
                                <a href="single.html">Sadipisci velit sed quia non nuuam.</a>
                            </h5>
                            <p>
                                By
                                <a href="#" class="user-blog">james</a>
                            </p>
                            <p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
                            <ul class="blog_list_info">
                                <li>
                                    <a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
                                        173
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
                                        10
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
                                        5
                                    </a>
                                </li>
                            </ul>
                            <h4>Aug 3,2018</h4>
                        </div>
                        <div class="col-md-6 blog-img img1">
                            <a href="single.html">
								<img src="<?= base_url("assets/umum/") ?>images/b2.jpg" alt="" class="img-responsive" />
							</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 blog-side blog-top-right" data-aos="zoom-in">
                    <article class="blog-top-right">
                        <div class="blog-img">
                            <a href="single.html">
								<img src="<?= base_url("assets/umum/") ?>images/b3.jpg" alt="" class="img-responsive" />
							</a>
                        </div>
                        <div class="blog_info  blog-right">
                            <h5>
                                <a href="single.html">Sadipisci velit sed quia non nuuam.</a>
                            </h5>
                            <p>
                                By
                                <a href="#" class="user-blog">james</a>
                            </p>
                            <p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
                            <ul class="blog_list_info">
                                <li>
                                    <a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
                                        173
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
                                        10
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
                                        5
                                    </a>
                                </li>
                            </ul>
                            <h4>Aug 30,2018</h4>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 blog-side blog-top-right two" data-aos="zoom-in">
                    <article class="blog-top-right">
                        <div class="blog-img">
                            <a href="single.html">
								<img src="<?= base_url("assets/umum/") ?>images/b2.jpg" alt="" class="img-responsive" />
							</a>
                        </div>
                        <div class="blog_info blog-right two">
                            <h5>
                                <a href="single.html">Sadipisci velit sed quia non nuuam.</a>
                            </h5>
                            <p>
                                By
                                <a href="#" class="user-blog">james</a>
                            </p>
                            <p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
                            <ul class="blog_list_info">
                                <li>
                                    <a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
                                        173
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
                                        10
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
                                        5
                                    </a>
                                </li>
                            </ul>
                            <h4>Aug 30,2018</h4>
                        </div>

                    </article>
                </div>
                <div class="col-lg-8 blog-sp" data-aos="zoom-in">
                    <article class="blog-x row">
                        <div class="col-md-6 blog-img">
                            <a href="single.html">
								<img src="<?= base_url("assets/umum/") ?>images/b1.jpg" alt="" class="img-responsive" />
							</a>
                        </div>
                        <div class="col-md-6 blog_info">
                            <h5>
                                <a href="single.html">Sadipisci velit sed quia non nuuam.</a>
                            </h5>
                            <p>
                                By
                                <a href="#" class="user-blog">james</a>
                            </p>
                            <p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
                            <ul class="blog_list_info">
                                <li>
                                    <a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
                                        173
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
                                        10
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
                                        5
                                    </a>
                                </li>
                            </ul>
                            <h4>July 3,2018</h4>
                        </div>
                    </article>
                    <article class="blog-x br-mar row">
                        <div class="col-md-6 blog_info">
                            <h5>
                                <a href="single.html">Sadipisci velit sed quia non nuuam.</a>
                            </h5>
                            <p>
                                By
                                <a href="#" class="user-blog">james</a>
                            </p>

                            <p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
                            <ul class="blog_list_info">
                                <li>
                                    <a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
                                        173
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
                                        10
                                    </a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
                                        5
                                    </a>
                                </li>
                            </ul>
                            <h4>Aug 3,2018</h4>
                        </div>
                        <div class="col-md-6 blog-img img1">
                            <a href="single.html">
								<img src="<?= base_url("assets/umum/") ?>images/b3.jpg" alt="" class="img-responsive" />
							</a>
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