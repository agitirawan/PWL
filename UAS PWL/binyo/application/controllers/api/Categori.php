<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Categori extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('api/Categori_model', 'categori');
    }

    function index_get() {
        $id = $this->get('categori_id');
        if ($id === null) {
            $categori = $this->categori->getCategori();
        } else {
            $this->db->where('categori_id', $id);
            $categori = $this->categori->getCategori($id);
		}
		
        if ($categori) {
			$this->response([
				'status' => true,
				'data' => $categori
			], REST_Controller::HTTP_OK);
		} else {
			$this->response([
				'status' => true,
				'data' => 'id not found'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	
	// DELETE
	function index_delete() {
        $id = $this->delete('member_id');
        if ($id === null) {
			$this->response([
				'status' => false,
				'message' => 'provide an id'
			], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->member->deleteMember($id) > 0) {
				$this->response([
					'status' => true,
					'member_id' => $id,
					'message' => 'deleted'
				], REST_Controller::HTTP_OK);	
			} else {
				$this->response([
					'status' => false,
					'message' => 'id not found!'
				], REST_Controller::HTTP_BAD_REQUEST);
			}
		}
	}
	
	// POST
	public function index_post(){
		$data = [
			'name' => $this->post('name'),
			'gender' => $this->post('gender'),
			'phone' => $this->post('phone'),
			'address' => $this->post('address'),
		];

		if ($this->member->createMember($data) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new member has been created'
			], REST_Controller::HTTP_CREATED);	
		} else {
			$this->response([
				'status' => false,
				'message' => 'failed to create new data'
			], REST_Controller::HTTP_BAD_REQUEST);
		}
	}

	// PUT
	public function index_put(){
		$id = $this->put('member_id');
		$data = [
			'name' => $this->put('name'),
			'gender' => $this->put('gender'),
			'phone' => $this->put('phone'),
			'address' => $this->put('address'),
		];
		if ($this->member->updateMember($data, $id) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new member has been updated'
			], REST_Controller::HTTP_OK);	
		} else {
			$this->response([
				'status' => false,
				'message' => 'failed to update data'
			], REST_Controller::HTTP_BAD_REQUEST);
		}
	}
}
?>
