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
		function curl_get($url)
		{
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$result = curl_exec($curl);
			curl_close($curl);
			return json_decode($result, true);
		}

		$menu = array(
			"judul" => "Galeri"
		);
		$data		= $this->M_Pendahuluan->umum($menu);

		$periode_daftar	= $this->M_Periode->daftar();
		if ($periode_daftar["status"] === 200) {//$periode["keterangan"][count($periode["keterangan"])-1]["periode_id"]
			$galeri     = $this->M_Galeri->lihat($periode_daftar["keterangan"][count($periode_daftar["keterangan"])-1]["periode_id"]);
			if ($galeri["status"] === 200) {
				$instagram_aksestoken	= $galeri["keterangan"]["instagram"];
				$instagram				= curl_get("https://api.instagram.com/v1/users/self/media/recent/?access_token=".$instagram_aksestoken);

				if ($instagram["meta"]["code"] === 200) {
					$data = @array_merge($data,
						array(
							"data" => $instagram["data"]
						)
					);
				} else {
					$data = @array_merge($data,
						array(
							"data" => ""
						)
					);
				}
			} else {
				$data = @array_merge($data,
					array(
						"data" => ""
					)
				);
			}
		} else {
			$data = @array_merge($data,
				array(
					"data" => ""
				)
			);
		}

		$this->load->view("umum/galeri", $data);
	}
}