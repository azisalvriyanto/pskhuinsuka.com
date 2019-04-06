<!doctype html>
<html class="no-js h-100" lang="en">
	<head>
        <?php $this->load->view("pengurus/_partials/head.php") ?>
    
    </head>
	<body class="h-100">
		<div class="container-fluid">
			<div class="row">
				<!-- sidebar -->
                <?php $this->load->view("pengurus/_partials/sidebar.php") ?>
				
                <!-- //sidebar -->

				<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
					<!-- navbar -->
                    <?php $this->load->view("pengurus/_partials/navbar.php") ?>

                    <!-- /navbar -->

					<div class="main-content-container container-fluid px-4">
						<!-- header -->
						<?php $this->load->view("pengurus/_partials/header.php") ?>

                        <!-- //header -->

						<!-- field -->
						<div class="row">
                            <div class="col-lg-12">
                                <div class="card card-small mb-4">
                                    <div class="card-header border-bottom">
                                        <div class="form-row">
                                            <div class="<?= !empty($data["daftar_periode"]) ? "col-md-8" : "col-md-12" ?> mt-2 mb-2">
                                                <h6 class="m-0">Galeri</h6>
                                            </div><?php if (!empty($data["daftar_periode"])) { ?>

                                            <div class="col-md-4 pt-1">
                                                <select id="periode" class="form-control">
                                                    <?php
                                                        for ($i=0; $i<count($data["daftar_periode"]); $i++) {
                                                            if ($i === count($data["daftar_periode"])-1) {
                                                                $selected = " selected";
                                                            }
                                                            else {
                                                                $selected = "";
                                                            }

                                                            echo "<option value=\"".$data["daftar_periode"][$i]["periode_id"]."\"".$selected.">".@str_replace("-", "/", $data["daftar_periode"][$i]["periode_keterangan"])."</option>";
                                                        } ?>

                                                </select>
                                            </div><? } ?>

                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-3">
                                            <div class="row">
                                                <div class="col">
                                                    <form id="profil-form"<?= !empty($data["periode"]) ? "" : " hidden" ?>>
                                                        <div class="form-group">
                                                            <label for="instagram">Instagram</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Akses token</span>
                                                                </div>
                                                                <input type="text" class="form-control" id="instagram" placeholder="Akses token" aria-label="Akses token" aria-describedby="basic-addon1" value="<?= !empty($data["periode"]) ? $data["instagram"] : "" ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center pt-3 pb-3">
                                                            <button type="button" class="btn btn-accent" id="perbarui">
                                                                <i class="far fa-save mr-1"></i>
                                                                Perbarui Galeri
                                                            </button>
                                                        </div>
                                                    </form>

                                                    <div id="profil-keterangan" class="col-md-12 text-center pt-2"<?= !empty($data["periode"]) ? " hidden" : "" ?>>
                                                         <label>Galeri organisasi tidak ditemukan.</label>
                                                     </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<!-- //field -->
						
                    </div>
                    
                    <!-- footer -->
                    <?php $this->load->view("pengurus/_partials/footer.php") ?>
					
                    <!-- //footer -->
				</main>
			</div>
        </div>

        <!-- javascript -->
        <?php $this->load->view("pengurus/_partials/javascript.php") ?>

        <script>
            var site_api = `<?= $api ?>`;

            $(document).ready(function() {
                $("#periode").change(function(){
                    var periode = $(this).find(":selected").attr("value");

                    $.ajax({
                        url: site_api+"/galeri/"+periode,
                        dataType: "json",
                        type: "GET",
                        success: function(response) {
                            if (response.status === 200) {
                                $("#status").html(``);
                                $("#profil-form").removeAttr("hidden");
                                $("#profil-keterangan").attr("hidden", "true");

                                var data = response.keterangan;
                                $("input[id=instagram]").val(data.instagram);
                            } else {
                                $("#profil-form").attr("hidden", "true");
                                $("#profil-keterangan").removeAttr("hidden");

                                $("#status").html(`<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                    <button type="button" class="close mt-1" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="fa fa-info mx-2"></i>
                                    <strong>`+response.keterangan+`</strong>
                                </div>`);
                            }
                        },
                        error: function (jqXHR, exception) {
                            $("#profil-form").attr("hidden", "true");
                            $("#profil-keterangan").removeAttr("hidden");

                            if (jqXHR.status === 0) {
                                keterangan = "Not connect (Verify Network).";
                            } else if (jqXHR.status == 404) {
                                keterangan = "Requested page not found.";
                            } else if (jqXHR.status == 500) {
                                keterangan = "Internal Server Error.";
                            } else if (exception === "parsererror") {
                                keterangan = "Requested JSON parse failed.";
                            } else if (exception === "timeout") {
                                keterangan = "Time out error.";
                            } else if (exception === "abort") {
                                keterangan = "Ajax request aborted.";
                            } else {
                                keterangan = "Uncaught Error ("+jqXHR.responseText+").";
                            }
                            $("#status").html(`<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                <button type="button" class="close mt-1" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <i class="fa fa-info mx-2"></i>
                                <strong>`+keterangan+`</strong>
                            </div>`);
                        }
                    });
                });

                $("#perbarui").click(function() {
                    $.ajax({
                        url: site_api+"/galeri/simpan",
                        dataType: "json",
                        type: "POST",
                        data : {
                            "periode": $("#periode").val(),
                            "instagram": $("#instagram").val()
                        },
                        beforeSend: function (e) {
                            $("#perbarui").html("<i class=\"fa fa-cog fa-spin mx-1\"></i> Sedang melakukan perubahan...");
                        },
                        success: function(response) {
                            $("#perbarui").html("<i class=\"far fa-save mr-1\"></i> Perbarui Galeri");
                            if (response.status === 200) {
                                swal({
                                    title: "Galeri berhasil diperbarui",
                                    icon: "success",
                                    button: "Tutup",
                                });
                            } else {
                                $("#status").html(`<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                    <button type="button" class="close mt-1" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="fa fa-info mx-2"></i>
                                    <strong>`+response.keterangan+`</strong>
                                </div>`);
                            }
                        },
                        error: function (jqXHR, exception) {
                            $("#perbarui").html("<i class=\"far fa-save mr-1\"></i> Perbarui Galeri");

                            if (jqXHR.status === 0) {
                                keterangan = "Not connect (verify network).";
                            } else if (jqXHR.status == 404) {
                                keterangan = "Requested page not found.";
                            } else if (jqXHR.status == 500) {
                                keterangan = "Internal Server Error.";
                            } else if (exception === "parsererror") {
                                keterangan = "Requested JSON parse failed.";
                            } else if (exception === "timeout") {
                                keterangan = "Time out error.";
                            } else if (exception === "abort") {
                                keterangan = "Ajax request aborted.";
                            } else {
                                keterangan = "Uncaught Error ("+jqXHR.responseText+").";
                            }
                            $("#status").html(`<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                <button type="button" class="close mt-1" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <i class="fa fa-info mx-2"></i>
                                <strong>`+keterangan+`</strong>
                            </div>`);
                        }
                    });
                });
            });
        </script>
        <!-- //javascript -->
	</body>
</html>