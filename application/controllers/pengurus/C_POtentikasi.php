<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class C_POtentikasi extends CI_Controller {
	public function index() {
		if($this->session->userdata("username")) {
			redirect("pengurus/beranda");
		} else {
			$data  = array(
				"api" => "http://localhost/pskhuinsuka.com.api"
			);

			$this->load->view("pengurus/masuk", $data);
		}
	}

	public function masuk() {
		$method = $_SERVER["REQUEST_METHOD"];
        if ($method === "POST") {
			$username = $this->input->post("username");
			$password = $this->input->post("password");

			$result		= $this->M_Otentikasi->masuk($username, $password);

			if ($result["status"] === 200) {
				$user_data = array(
					"username" => $result["keterangan"]["username"]
				);

				$this->session->set_userdata($user_data);
				redirect(base_url("pengurus/")."beranda");
			} else {
				redirect(base_url("pengurus"));
			}
		}
		else {
			redirect(base_url("pengurus"));
		}
	}

	public function keluar() {
		$this->session->unset_userdata("username");

		redirect(base_url("pengurus"));
	}
}
