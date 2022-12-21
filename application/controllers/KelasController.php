<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelasController extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('frondend/kelas');
		$this->load->view('template/footer');
	}

	public function kelas()
	{
		$this->load->view('template/header');
		$this->load->view('frondend/kelas2');
		$this->load->view('template/footer');
	}

	public function kelas2()
	{
		$this->load->view('template/header');
		$this->load->view('frondend/kelas2');
		$this->load->view('template/footer');
	}
}
