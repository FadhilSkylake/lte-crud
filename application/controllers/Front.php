<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Front extends CI_Controller (

    protected $data = array();
    public function __construct()
    {
        parent::__construct();
    }

    public function layout()
    {
        $this->template['header'] = $this->load->view('template/header', $this->data, TRUE);
        $this->template['footer'] = $this->load->view('template/footer', $this->data, TRUE);
        $this->template['navbar'] = $this->load->view('template/navbar', $this->data, TRUE);
        $this->template['page'] = $this->load->view('template/page', $this->data, TRUE);
    }
)




?>