<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Umum extends CI_Controller {
	public function index() {
		$menu = array(
			"judul" => "Beranda"
		);
		$data		= $this->M_Pendahuluan->umum($menu);
		$data["data"]	= array();

		$divisi = $this->M_Divisi->daftar();
		if ($divisi["status"] === 200) {
			$data["data"] = @array_merge($data["data"],
				array(
					"divisi" => $divisi["keterangan"],
				)
			);
		} else {
			$data["data"] = @array_merge($data["data"],
				array(
					"divisi" => "",
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
			$data["data"] = @array_merge($data["data"],
				array(
					"jpendapat" => ""
				)
			);
		}
		
		if (@is_file("../pskhuinsuka.com/assets/gambar/organisasi/".$data["organisasi"]["periode"]."_portrait.png")) {
			$foto	= "assets/gambar/organisasi/".$data["organisasi"]["periode"]."_portrait.png";
		} else {
			$foto	= "assets/gambar/keanggotaan/_standar_portrait.png";
		}
		$data["data"] = @array_merge($data["data"],
			array(
				"portrait" => $foto
			)
		);

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
		$data["data"]	= array();

		$artikel	= $this->M_Artikel->daftar_terbit();
		$data["data"] = @array_merge($data["data"], $artikel["keterangan"]);
		//print_r($data); exit;
		//echo 7 % 6; exit;
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
		$data["data"]	= array();

		$periode	= $this->M_Organisasi->periode_terakhir();
		$galeri     = $this->M_Galeri->lihat($periode["keterangan"]);

		if ($periode["status"] === 200 && $galeri["status"] === 200) {
			$instagram_aksestoken	= $galeri["keterangan"]["instagram"];
			$instagram				= curl_get("https://api.instagram.com/v1/users/self/media/recent/?access_token=".$instagram_aksestoken);

			if ($instagram["meta"]["code"] === 200) {
				$data["data"] = @array_merge($data["data"], $instagram["data"]);
			} else {
				$data["data"] = @array_merge($data["data"], "");
			}
		} else {
			$data["data"] = @array_merge($data["data"], "");
		}

		$this->load->view("umum/galeri", $data);
	}
}