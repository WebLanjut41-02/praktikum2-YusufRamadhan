<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication_Karyawan extends CI_Controller {

	public function __construct()
	 {
	 	parent:: __construct();
	     $this->load->model('Model_Login');
	     $this->load->model('Model_Karyawan');
	 }

	public function index()
	{
		$this->load->view('Karyawan/Login');
	}

	public function proses_login()
	{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');

		$cekLogin = $this->Model_Login->cekLogin($nip, $nama);
		$result = count($cekLogin);

		if ($result > 0) {
			
			$Login = $this->db->get_where('karyawan', array('NIP'=>$nip, 'Nama'=> $nama))->row();

			$nip = $this->Model_Login->getKaryawan($Login->NIP)[0]->NIP;
			$nama = $this->Model_Login->getKaryawan($Login->Nama)[0]->Nama;

			$dataSession = array(
				'NIP' => $nip,
				'Nama' => $nama,
				'Status' => 'Login'
			);

			$this->session->set_userdata($dataSession);
			redirect(base_url("index.php/Karyawan/home"));

		}
	}

	public function logout(){
	$this->session->sess_destroy();
	redirect(base_url('Karyawan/Authentication_Karyawan/index'));
	}
}