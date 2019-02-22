<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_Paket extends CI_Model {


		function getAllPaket() {

		    $this->db->from('paket a');
		   	$this->db->join('penghuni c', 'a.sasaran = c.NoKTP');
		    $query = $this->db->get();
		    return $query->result();

		}

		function getAllPenghuni() {
		   $this->db->from('penghuni');

		   $query = $this->db->get();
   			return $query->result();
  		}

		function input_paket($sasaran, $isipaket, $penerima){

			$data = array(
				'tanggal_datang'=> date('Y-m-d H:i:s'),
				'sasaran' => $sasaran,
				'penerima' => $penerima,
				'isi_paket' => $isipaket
			);

			$this->db->insert('paket', $data);
		}

}

?>
