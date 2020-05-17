<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        check_not_login();
		$this->load->model(['item_m', 'categori_m', 'unit_m']);
    }
	
	public function index()
	{
		$data['row'] = $this->item_m->get();
		$this->template->load('template', 'item/item_data', $data);
    }
    
    public function add()
	{
		$item = new stdClass();
		$item->item_id = NULL;
		$item->barcode = NULL;
		$item->name = NULL;
        $item->price = NULL;
        $item->categori_id = NULL;
        
        $query_categori = $this->categori_m->get();
        $query_unit = $this->unit_m->get();
        $unit[null] = '-- Pilih --';
        foreach($query_unit->result() as $unt){
            $unit[$unt->unit_id] = $unt->name;

        } 

		$data = array(
			'page' => 'add',
            'row' => $item,
            'categori' => $query_categori,
            'unit' => $unit, 'selectedunit' => NULL,
		);
		$this->template->load('template', 'item/item_form', $data);
    }
    
    public function edit($id)
	{
		$query = $this->item_m->get($id);
		if($query->num_rows() > 0){
			$item = $query->row();
			$query_categori = $this->categori_m->get();
            $query_unit = $this->unit_m->get();
            $unit[null] = '-- Pilih --';
            foreach($query_unit->result() as $unt){
                $unit[$unt->unit_id] = $unt->name;

            } 

            $data = array(
                'page' => 'edit',
                'row' => $item,
                'categori' => $query_categori,
                'unit' => $unit, 'selectedunit' => $item->unit_id,
            );
            $this->template->load('template', 'item/item_form', $data);
		} else {
			echo "<script>alert('Data Tidak Di Temukan');";
                echo "window.location='".site_url('user')."';</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
            if($this->item_m->check_barcode($post['barcode'])->num_rows() > 0){
                echo "<script>alert('Error Kode Barang Sudah Dipakai');</script>";
                echo "<script>window.location='".site_url('item/add')."';</script>";
            } else {
                $this->item_m->add($post);
            }
		} else if(isset($_POST['edit'])) {
			$this->item_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
            echo "<script>alert('Data Berhasil Di Simpan');</script>";
        }
        echo "<script>window.location='".site_url('item')."';</script>";
    }
    
    public function del($id)
	{
		$this->item_m->del($id);
		if($this->db->affected_rows() > 0){
            echo "<script>alert('Data Berhasil Di Hapus');</script>";
        }
        echo "<script>window.location='".site_url('item')."';</script>";
	}
}