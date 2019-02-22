<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Login');
	    $this->load->model('Model_Paket');
	    $this->load->model('Model_Karyawan');
	    if($this->session->userdata('Status')!="Login") {
	    	redirect(base_url("Karyawan/Authentication_Karyawan/index"));
	    }
  }

	public function index()
	{
		$dataPaket = $this->Model_Paket->getAllPaket();
		$this->session->set_userdata('all_data', $dataPaket);
		$this->load->view('Karyawan/home');
	}
}