<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiswaController extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('frondend/siswa');
		$this->load->view('template/footer');
	}
}
