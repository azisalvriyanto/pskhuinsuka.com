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
				"judul_sub" => "Sunting"
			);
			$data		= $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));

			$periode		= $this->M_Periode->daftar();
			$divisi 		= $this->M_Divisi->daftar();
			$keanggotaan	= $this->M_Keanggotaan->lihat($username);
			if ($periode["status"] === 200 && $divisi["status"] === 200 && $keanggotaan["status"] === 200) {
				$data = @array_merge($data,
					array(
						"data" => array(
							"daftar_periode" => $periode["keterangan"],
							"daftar_divisi" => $divisi["keterangan"],
							"keterangan" => $keanggotaan["keterangan"]["keterangan"],
							"periode" => $keanggotaan["keterangan"]["periode"],
							"username" => $keanggotaan["keterangan"]["username"],
							"foto" => $keanggotaan["keterangan"]["foto"],
							"nama" => $keanggotaan["keterangan"]["nama"],
							"angkatan" => $keanggotaan["keterangan"]["angkatan"],
							"divisi" => $keanggotaan["keterangan"]["divisi"],
							"jabatan" => $keanggotaan["keterangan"]["jabatan"],
							"jabatan_x" => $keanggotaan["keterangan"]["jabatan_x"],
							"email" => $keanggotaan["keterangan"]["email"],
							"telepon" => $keanggotaan["keterangan"]["telepon"],
							"motto" => $keanggotaan["keterangan"]["motto"]
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
						"periode" => "",
						"foto" => "assets/gambar/keanggotaan/_standar.png"
					)
				)
			);

			$this->load->view("pengurus/profil", $data);
		} else {
			redirect(base_url("pengurus"));
		}
	}
}