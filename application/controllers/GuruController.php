<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuruController extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('frondend/guru');
		$this->load->view('template/footer');
	}
}
