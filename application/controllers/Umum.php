<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Umum extends CI_Controller {
	public function index() {
		$menu = array(
			"judul" => "Beranda"
		);
		$data		= $this->M_Pendahuluan->umum($menu);

		$divisi = $this->M_Divisi->daftar();
		if ($divisi["status"] === 200) {
			$data = @array_merge($data,
					array(
						"data" => array(
							"divisi" => $divisi["keterangan"],
						)
					)
				);
		} else {
			$data = @array_merge($data,
					array(
						"data" => array(
							"divisi" => "",
						)
					)
				);
		}

		$jpendapat = $this->M_JPendapat->daftar();
		if ($divisi["status"] === 200) {
			$data["data"] = @array_merge($data["data"],
					 array(
							"jpendapat" => $jpendapat["keterangan"],
						)
				);
		} else {
			$data = @array_merge($data,
					array(
						"data" => array(
							"jpendapat" => "",
						)
					)
				);
		}

		$this->load->view("umum/beranda", $data);
	}

	public function kontak() {
		$menu = array(
			"judul" => "Kontak"
		);
		$data		= $this->M_Pendahuluan->umum($menu);

		$this->load->view("umum/kontak", $data);
	}

	public function artikel() {
		$menu = array(
			"judul" => "Artikel"
		);
		$data		= $this->M_Pendahuluan->umum($menu);

		$this->load->view("umum/artikel", $data);
	}

	public function berita() {
		$menu = array(
			"judul" => "Berita"
		);
		$data		= $this->M_Pendahuluan->umum($menu);

		$this->load->view("umum/berita", $data);
	}

	public function kegiatan() {
		$menu = array(
			"judul" => "Kegiatan"
		);
		$data		= $this->M_Pendahuluan->umum($menu);

		$this->load->view("umum/kegiatan", $data);
	}

	public function galeri() {
		$menu = array(
			"judul" => "Galeri"
		);
		$data		= $this->M_Pendahuluan->umum($menu);

		$this->load->view("umum/galeri", $data);
	}
}