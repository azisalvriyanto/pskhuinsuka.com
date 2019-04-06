<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class C_PGaleri extends CI_Controller {
    public function index() {
        if($this->session->userdata("username")) {
            $menu = array(
                "judul" => "Galeri",
                "judul_sub" => "Keterangan"
            );
            $data  = $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));

			$periode    = $this->M_Periode->daftar();
			if ($periode["status"] === 200) {
                $galeri     = $this->M_Galeri->lihat($periode["keterangan"][count($periode["keterangan"])-1]["periode_id"]);
				if ($galeri["status"] === 200) {
					$data = @array_merge($data,
						array(
							"data" => $galeri["keterangan"]
						)
					);
					$data["data"] = @array_merge($data["data"],
						array(
							"daftar_periode" => $periode["keterangan"]
						)
					);
				} else {
					$data = @array_merge($data,
						array(
							"data" => array(
								"daftar_periode" => $periode["keterangan"],
								"periode" => ""
							)
						)
					);
				}
			} else {
				$data = @array_merge($data,
					array(
						"data" => array(
							"daftar_periode" => "",
							"periode" => ""
						)
					)
				);
			}

			$this->load->view("pengurus/galeri", $data);
        } else {
            redirect("pengurus");
        }
    }
}