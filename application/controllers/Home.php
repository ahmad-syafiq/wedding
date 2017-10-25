<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }
  
	public function index()
	{
		$data['title'] = 'Wedding Invitation Jenny & Mark';
		$this->load->view('template/header', $data);
		$this->load->view('template/navigation');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}

