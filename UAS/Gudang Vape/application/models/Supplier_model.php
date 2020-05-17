<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

	public function getSupplier($id=null){
		if ($id === null) {
			return $this->db->get('supplier')->result_array();
		} else {
			return $this->db->get_where('supplier', ['supplier_id' => $id])->result_array();
		}
	}

	public function deleteSupplier($id){
		$this->db->delete('supplier', ['supplier_id' => $id]);
		return $this->db->affected_rows();
		
	}

	public function createSupplier($data){
		$this->db->insert('supplier', $data);
		return $this->db->affected_rows();
		
	}

	public function updateSupplier($data, $id){
		$this->db->update('supplier', $data, ['supplier_id' => $id]);
		return $this->db->affected_rows();
		
	}

}

/* End of file Mahasiswa_model.php */

?>
