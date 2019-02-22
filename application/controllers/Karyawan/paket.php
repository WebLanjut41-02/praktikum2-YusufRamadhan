<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paket extends CI_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Paket');
	    $this->load->model('Model_Karyawan');
	    $this->load->model('Model_Penghuni');
	  }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function input_paket()
 	{
  		$data = $this->Model_Paket->getAllPenghuni();
  		$this->session->set_userdata('all_data', $data);
  		$this->load->view('Karyawan/paket');
 	}

 		public function prosesinput_paket()
	{
		$sasaran = $this->input->post('kepada');
		$isipaket = $this->input->post('Isi');
		$penerima = $this->session->userdata("nama");

		$this->Model_Paket->input_paket($sasaran, $isipaket, $penerima);
		redirect('Karyawan/home');
	}
}
