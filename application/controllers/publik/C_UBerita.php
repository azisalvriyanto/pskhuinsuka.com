<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class C_UBerita extends CI_Controller {
  	public function index() {
		$menu = array(
			"judul" => "Berita"
		);
		$data		= $this->M_Pendahuluan->umum($menu);

		$this->load->view("umum/berita", $data);
	}

	public function daftar($tahun, $bulan="") {
		$menu = array(
			"judul" => "Berita"
		);
		$data		= $this->M_Pendahuluan->umum($menu);

		if (
			!empty($tahun) && is_numeric($tahun)
			&& !empty($bulan) && is_numeric($bulan)
		) {
			echo $tahun." - ".$bulan;
			//$berita = $this->M_Berita->daftar($tahun, $bulan);
		} else if (
			!empty($tahun) && is_numeric($tahun)
			&& empty($bulan)
		) {
			echo $tahun;
			//$berita = $this->M_Berita->daftar($tahun);
		} else {
			echo "kontol";
		}

		exit;
		$this->load->view("umum/berita", $data);
	}
}