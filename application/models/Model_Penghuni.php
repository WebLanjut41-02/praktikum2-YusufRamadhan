<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_Penghuni extends CI_Model {


	public function getAllPenghuni()
	{
		$this->db->from('penghuni');

		$query = $this->db->get();
		return $query->result();
	}

}



 ?>