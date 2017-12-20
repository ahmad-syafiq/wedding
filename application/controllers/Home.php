<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
  }
  
	public function index()
	{
		$data['title'] = 'Wedding Invitation Fendi & Yuli';

		$this->load->model('congrats_model'); 
    $r_list          = $this->congrats_model->congrats_data();           
    $datas['r_list'] = $r_list;

		$this->load->view('template/simple/header', $data);
		$this->load->view('template/simple/navigation');
		$this->load->view('template/simple/home', $datas);
		$this->load->view('template/simple/footer');
	}
}


