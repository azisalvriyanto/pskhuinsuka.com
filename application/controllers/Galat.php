<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Galat extends CI_Controller {
	public function _404() {
		$this->load->view("galat/404");
	}
}