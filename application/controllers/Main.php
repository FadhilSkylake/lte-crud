<?php
defineD('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
    // public function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('M_main');
	// }

    public function index() {
        $this->load->view('front/main');
    }
    
    }
