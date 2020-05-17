<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Categori_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('p_categori');
        if($id != null){
            $this->db->where('categori_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['categori_name'],
        ];
        $this->db->insert('p_categori', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['categori_name'],
        ];
        $this->db->where('categori_id', $post['id']);
        $this->db->update('p_categori', $params);
    }

    public function del($id)
    {
        $this->db->where('categori_id', $id);
        $this->db->delete('p_categori');
    }

}