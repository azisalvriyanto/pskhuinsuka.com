<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
					<div class="main-navbar">
						<nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
							<a class="navbar-brand w-100 mr-0" href="<?= base_url("pengurus") ?>" style="line-height: 25px;">
								<div class="d-table m-auto">
									<img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?= base_url("assets/pengurus/") ?>images/shards-dashboards-logo.svg" alt="Pusat Studi dan Konsultasi Hukum">
									<span class="d-none d-md-inline ml-1"><?= $organisasi["nama_pendek"] ?></span>
								</div>
							</a>
							<a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
								<i class="material-icons">&#xE5C4;</i>
							</a>
						</nav>
					</div>
					<form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
						<div class="input-group input-group-seamless ml-3">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-search"></i>
								</div>
							</div>
							<input class="navbar-search form-control" type="text" name="cari" placeholder="Cari sesuatu..." aria-label="Cari"> </div>
					</form>
					<div class="nav-wrapper">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link <?= (@strtolower($menu["judul"]) == "beranda") ? "active" : ""; ?>" href="<?= base_url("pengurus/") ?>beranda">
									<i class="material-icons">dashboard</i>
									<span>Beranda</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= (@strtolower($menu["judul"]) == "organisasi") ? "active" : ""; ?>" href="<?= base_url("pengurus/") ?>organisasi">
									<i class="material-icons">account_balance</i>
									<span>Organisasi</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= (@strtolower($menu["judul"]) == "keanggotaan") ? "active" : ""; ?>" href="<?= base_url("pengurus/") ?>keanggotaan">
									<i class="material-icons">group</i>
									<span>Keanggotaan</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= (@strtolower($menu["judul"]) == "keuangan") ? "active" : ""; ?>" href="<?= base_url("pengurus/") ?>keuangan">
									<i class="material-icons">local_atm</i>
									<span>Keuangan</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= (@strtolower($menu["judul"]) == "artikel") ? "active" : ""; ?>" href="<?= base_url("pengurus/") ?>artikel">
									<i class="material-icons">assignment</i>
									<span>Artikel</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= (@strtolower($menu["judul"]) == "berita") ? "active" : ""; ?>" href="<?= base_url("pengurus/") ?>berita">
									<i class="material-icons">library_books</i>
									<span>Berita</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= (@strtolower($menu["judul"]) == "kegiatan") ? "active" : ""; ?>" href="<?= base_url("pengurus/") ?>kegiatan">
									<i class="material-icons">event_note</i>
									<span>Kegiatan</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= (@strtolower($menu["judul"]) == "galeri") ? "active" : ""; ?>" href="<?= base_url("pengurus/") ?>galeri">
									<i class="material-icons">perm_media</i>
									<span>Galeri</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= (@strtolower($menu["judul"]) == "Ganti Kepengurusan") ? "active" : ""; ?>" href="<?= base_url("pengurus/") ?>gantikepengurusan">
									<i class="material-icons">autorenew</i>
									<span>Ganti Kepengurusan</span>
								</a>
							</li>
						</ul>
					</div>
				</aside>