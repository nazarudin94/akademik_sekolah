<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NilaiController extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('frondend/nilai');
		$this->load->view('template/footer');
	}
}
