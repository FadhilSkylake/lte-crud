<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppenting extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Ppenting_model');
	}
	
	public function front() {
        $this->load->view('front/perdagangan');
    }

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataPenting'] = $this->Ppenting_model->select_all();

		$data['page'] = "Perdagangan";
		$data['judul'] = "Data Bahan Penting";
		$data['deskripsi'] = "Manage Data Bahan Penting";

		// $data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('Ppenting/home', $data);
	}

	public function tampil() {
		$data['dataPenting'] = $this->Ppenting_model->select_all();
		$this->load->view('Ppenting/list_data', $data);
	}
}