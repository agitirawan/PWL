<?php

defined('BASEPATH') or exit('No direct script access allowed');

class movie extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Movie';
        $this->load->view('template/header', $data);
        $this->load->view('movie/index');
        $this->load->view('template/footer');
    }
}

/* End of file Movie.php */
