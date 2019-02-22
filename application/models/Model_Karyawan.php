<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_Karyawan extends CI_Model {


	public function getById($nip)
	{
		$this->db->from('karyawan');
		$this->db->where('NIP', $nip);

		$query = $this->db->get();
		return $query->result();
	}

}



 ?>