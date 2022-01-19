<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perdagangan extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Ppenting_model');
        $this->load->model('Ppokok_model');
	}
	

    public function front (){
        $this->load->view('front/perdagangan');
    }
    public function pokok() {
		$data['dataPokok'] = $this->Ppokok_model->select_all();
		$this->load->view('Ppokok/list_data', $data);
	}
    public function penting() {
		$data['dataPenting'] = $this->Ppenting_model->select_all();
		$this->load->view('Ppenting/list_data', $data);
	}
}
?>