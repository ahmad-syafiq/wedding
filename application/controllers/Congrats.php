<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Congrats extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
  }
  
	public function index()
	{
		$data['title'] = 'Ucapan Selamat Wedding Fendi & Yuli';
    
    $this->load->model('congrats_model');  
    $r_data          = $this->congrats_model->congrats_list();           
    $datas['r_data'] = $r_data;

    $r_list          = $this->congrats_model->congrats_data();           
    $datas['r_list'] = $r_list;

		$this->load->view('template/simple/header', $data);
		$this->load->view('template/simple/navigation');
		$this->load->view('template/simple/congrats', $datas);
		$this->load->view('template/simple/footer');

	}
}

