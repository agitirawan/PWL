<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Item extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('api/Item_model', 'item');
    }

    function index_get() {
        $id = $this->get('item_id');
        $id = $this->get('item_id');
        if ($id === null) {
            $item = $this->item->getItem();
        } else {
            $this->db->where('item_id', $id);
            $item = $this->item->getItem($id);
        }
		
        if ($item) {
			$this->response([
				'status' => true,
				'data' => $item
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
        $id = $this->delete('item_id');
        if ($id === null) {
			$this->response([
				'status' => false,
				'message' => 'provide an id'
			], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->item->deleteItem($id) > 0) {
				$this->response([
					'status' => true,
					'item_id' => $id,
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

		if ($this->item->createitem($data) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new item has been created'
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
		$id = $this->put('item_id');
		$data = [
			'name' => $this->put('name'),
			'gender' => $this->put('gender'),
			'phone' => $this->put('phone'),
			'address' => $this->put('address'),
		];
		if ($this->item->updateitem($data, $id) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new item has been updated'
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
