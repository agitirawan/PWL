<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categori_model extends CI_Model {

	public function getCategori($id=null){
		if ($id === null) {
			return $this->db->get('p_categori')->result_array();
		} else {
			return $this->db->get_where('p_categori', ['categori_id' => $id])->result_array();
		}
	}

	public function deleteMember($id){
		$this->db->delete('member', ['member_id' => $id]);
		return $this->db->affected_rows();
		
	}

	public function createMember($data){
		$this->db->insert('member', $data);
		return $this->db->affected_rows();
		
	}

	public function updateMember($data, $id){
		$this->db->update('member', $data, ['member_id' => $id]);
		return $this->db->affected_rows();
		
	}

}

/* End of file Mahasiswa_model.php */

?>
