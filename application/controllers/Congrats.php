<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Congrats extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }
  
	public function index()
	{
		$data['title'] = 'Ucapan Selamat Wedding Fendi & Yuli';
		$this->load->view('template/simple/header', $data);
		$this->load->view('template/simple/navigation');
		$this->load->view('template/simple/congrats');
		$this->load->view('template/simple/footer');
	}
}

