<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class C_PPengaturan extends CI_Controller {
    public function index() {
        if($this->session->userdata("username")) {
            $menu = array(
                "judul" => "Pengaturan",
                "judul_sub" => "Kepengurusan"
            );
            $data  = $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));

            $periode_daftar	= $this->M_Periode->daftar();
			if ($periode_daftar["status"] === 200) {
				$periode		= $periode_daftar["keterangan"][count($periode_daftar["keterangan"])-1];
				$keanggotaan    = $this->M_Keanggotaan->daftar($periode["periode_id"]);
				if ($keanggotaan["status"] === 200) {
                    $divisi     = $this->M_Divisi->daftar();
					$data = @array_merge($data,
						array(
							"data" => array(
                                "daftar_periode" => $periode_daftar,
                                "periode" => $periode["periode_keterangan"],
                                "keanggotaan" => $keanggotaan["keterangan"],
                                "divisi" => $divisi["keterangan"]
                            )
						)
					);
				} else {
					$data = @array_merge($data,
						array(
							"data" => array(
                                "daftar_periode" => $periode_daftar,
                                "periode" => $periode["periode_keterangan"],
                                "keanggotaan" => "",
                                "divisi" => $divisi["keterangan"]
                            )
						)
					);
				}
			} else {
                $data = @array_merge($data,
                    array(
                        "data" => array(
                            "periode" => $periode["periode_keterangan"],
                            "keanggotaan" => ""
                        )
                    )
                );
			}

			$this->load->view("pengurus/pengaturan", $data);
        } else {
            redirect("pengurus");
        }
    }
}