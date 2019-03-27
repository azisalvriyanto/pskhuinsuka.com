<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class C_POrganisasi extends CI_Controller {
  public function index() {
		if($this->session->userdata("username")) {
			$menu = array(
				"judul" => "Organisasi",
				"judul_sub" => "Profil"
			);
			$data  = $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));
			
			$periode	= $this->M_Periode->daftar();
			$jpendapat	= $this->M_JPendapat->daftar();
			if ($periode["status"] === 200 && $jpendapat["status"] === 200) {
				$result		= $this->M_Organisasi->lihat($periode["keterangan"][count($periode["keterangan"])-1]["periode_id"]);
				if ($result["status"] === 200) {
					$data = @array_merge($data,
						array(
							"data" => $result["keterangan"]
						)
					);
					$data["data"] = @array_merge($data["data"],
						array(
							"daftar_periode" => $periode["keterangan"],
							"jpendapat" => $jpendapat["keterangan"]
						)
					);
				} else {
					$data = @array_merge($data,
						array(
							"data" => array(
								"daftar_periode" => $periode["keterangan"],
								"jpendapat" => $jpendapat["keterangan"],
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
							"jpendapat" => "",
							"periode" => ""
						)
					)
				);
			}

			$this->load->view("pengurus/organisasi", $data);
		} else {
			redirect("pengurus");
		}
	}
}