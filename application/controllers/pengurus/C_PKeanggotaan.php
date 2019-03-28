<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class C_PKeanggotaan extends CI_Controller {
  	public function index() {
		if($this->session->userdata("username")) {
			$menu = array(
				"judul" => "Keanggotaan",
				"judul_sub" => "Daftar"
			);
			$data		= $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));
			
			$periode	= $this->M_Periode->daftar();
			if ($periode["status"] === 200) {
				$result		= $this->M_Keanggotaan->daftar($periode["keterangan"][count($periode["keterangan"])-1]["periode_id"]);
				if ($result["status"] === 200) {
					$data = @array_merge($data,
						array(
							"data" => array(
								"daftar_periode" => $periode["keterangan"],
								"daftar" => $result["keterangan"]
							)
						)
					);
				} else {
					$data = @array_merge($data,
						array(
							"data" => array(
								"daftar_periode" => $periode["keterangan"],
								"daftar" => ""
							)
						)
					);
				}
			} else {
				$data = @array_merge($data,
					array(
						"data" => array(
							"daftar_periode" => "",
							"daftar" => ""
						)
					)
				);
			}

			$this->load->view("pengurus/keanggotaan", $data);
		} else {
			redirect(base_url("pengurus"));
		}
	}

	public function lihat($username) {
		if($this->session->userdata("username")) {
			$menu = array(
				"judul" => "Keanggotaan",
				"judul_sub" => "Profil"
			);
			$data		= $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));

			$periode	= $this->M_Periode->daftar();
			$divisi 	= $this->M_Divisi->daftar();

			$result		= $this->M_Keanggotaan->lihat($username);
			if ($result["status"] === 200) {
				$data = @array_merge($data,
					array(
						"data" => array(
							"daftar_periode" => $periode["keterangan"],
							"daftar_divisi" => $divisi["keterangan"],
							"keterangan" => $result["keterangan"]["keterangan"],
							"periode" => $result["keterangan"]["periode"],
							"username" => $result["keterangan"]["username"],
							"nama" => $result["keterangan"]["nama"],
							"angkatan" => $result["keterangan"]["angkatan"],
							"divisi" => $result["keterangan"]["divisi"],
							"jabatan" => $result["keterangan"]["jabatan"],
							"jabatan_x" => $result["keterangan"]["jabatan_x"],
							"email" => $result["keterangan"]["email"],
							"telepon" => $result["keterangan"]["telepon"],
							"motto" => $result["keterangan"]["motto"]
						)
					)
				);
			} else {
				redirect(base_url("pengurus/")."keanggotaan");
			}

			$this->load->view("pengurus/profil", $data);
		} else {
			redirect(base_url("pengurus"));
		}
	}

	public function tambah() {
		if($this->session->userdata("username")) {
			$menu = array(
				"judul" => "Keanggotaan",
				"judul_sub" => "Tambah"
			);
			$data		= $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));
			
			$periode	= $this->M_Periode->daftar();
			$divisi 	= $this->M_Divisi->daftar();
			$data = @array_merge($data,
				array(
					"data" => array(
						"daftar_periode" => $periode["keterangan"],
						"daftar_divisi" => $divisi["keterangan"],
						"periode" => ""
					)
				)
			);

			$this->load->view("pengurus/profil", $data);
		} else {
			redirect(base_url("pengurus"));
		}
	}
}