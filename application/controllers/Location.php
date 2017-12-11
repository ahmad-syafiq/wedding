<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }
  
	public function index()
	{
		$data['title'] = 'Location Wedding Fendi & Yuli';
		$this->load->view('template/simple/header', $data);
		$this->load->view('template/simple/navigation');
		$this->load->view('template/simple/location');
		$this->load->view('template/simple/footer');
	}
}

