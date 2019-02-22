<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_Login extends CI_Model {


		function cekLogin($nip, $nama) {
			
			$this->db->from('karyawan');
			$this->db->where('NIP', $nip);
			$this->db->where('Nama', $nama);

			  $query = $this->db->get();
			return $query->result();

		}

		function getKaryawan($nip) {
			$this->db->select('*');
			$this->db->from('karyawan');
			$this->db->where('nip', $nip);
			$query = $this->db->get(); 
	    	return $query->result();
		}

}

?>