<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("umum/_partials/head.php") ?>

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
			<h3 class="tittle">Galeri</h3>
			<div class="row inner-sec-wthree">
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g1.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?= base_url("assets/umum/") ?>images/g1.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Smelter</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g2.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?= base_url("assets/umum/") ?>images/g2.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Smelter</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g3.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?= base_url("assets/umum/") ?>images/g3.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Smelter</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g4.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?= base_url("assets/umum/") ?>images/g4.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Smelter</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g5.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?= base_url("assets/umum/") ?>images/g5.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Smelter</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g6.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?= base_url("assets/umum/") ?>images/g6.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Smelter</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g7.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?= base_url("assets/umum/") ?>images/g7.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Smelter</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g8.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?= base_url("assets/umum/") ?>images/g8.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Smelter</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?= base_url("assets/umum/") ?>images/g9.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?= base_url("assets/umum/") ?>images/g9.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Smelter</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
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