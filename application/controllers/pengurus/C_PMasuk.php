<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class C_PMasuk extends CI_Controller {
	public function index() {
		if($this->session->userdata("username")) {
			redirect("pengurus/beranda");
		} else {
			$data  = array(
				"api" => base_url("..")."/pskhuinsuka.com.api"
      );

			$this->load->view("pengurus/masuk", $data);
		}
  }
}