<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class C_PArtikel extends CI_Controller {
    public function index() {
        if($this->session->userdata("username")) {
            $menu = array(
                "judul" => "Artikel",
                "judul_sub" => "Daftar"
            );
            $data  = $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));

            $result	= $this->M_Artikel->daftar();
            if ($result["status"] === 200) {
                $data = @array_merge($data,
                    array(
                        "data" => $result["keterangan"]
                    )
                );
            } else {
                $data = @array_merge($data,
                    array(
                        "data" => ""
                    )
                );
            }

            $this->load->view("pengurus/artikel", $data);
        } else {
            redirect("pengurus");
        }
    }

    public function tambah() {
        if($this->session->userdata("username")) {
            $menu = array(
                "judul" => "Artikel",
                "judul_sub" => "Tambah"
            );
            $data  = $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));

            $result		= $this->M_Divisi->lihat($data["pengguna"]["divisi"]);
            if ($result["status"] === 200) {
                $data = @array_merge($data,
                    array(
                        "data" => array(
                            "divisi" => $result["keterangan"]["keterangan"]
                        )
                    )
                );
            } else {
                redirect("pengurus/artikel");
            }

            $this->load->view("pengurus/artikel_pengaturan", $data);
        } else {
            redirect("pengurus/artikel");
        }
    }

    public function perbarui($id) {
        if($this->session->userdata("username")) {
            $menu = array(
                "judul" => "Artikel",
                "judul_sub" => "Sunting"
            );
            $data  = $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));

            $result    = $this->M_Artikel->lihat($id);
            if ($result["status"] === 200) {
                $data = @array_merge($data,
                    array(
                        "data" => $result["keterangan"]
                    )
                );
            } else {
                redirect("pengurus/artikel/tambah");
            }

            $this->load->view("pengurus/artikel_pengaturan", $data);
        } else {
            redirect("pengurus");
        }
    }
}