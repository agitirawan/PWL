<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function getMember($id=null){
		if ($id === null) {
			return $this->db->get('member')->result_array();
		} else {
			return $this->db->get_where('member', ['member_id' => $id])->result_array();
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
