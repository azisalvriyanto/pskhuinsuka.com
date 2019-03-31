<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class C_PPengaturan extends CI_Controller {
    public function index() {
        if($this->session->userdata("username")) {
            $menu = array(
                "judul" => "Pengaturan",
                "judul_sub" => "Ganti Kepengurusan"
            );
            $data  = $this->M_Pendahuluan->pengurus($menu, $this->session->userdata("username"));

            echo "Ganti kepengurusan";
        } else {
            redirect("pengurus");
        }
    }
}