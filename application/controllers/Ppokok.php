<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppokok extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Ppokok_model');
	}
	
	public function front() {
        $this->load->view('front/perdagangan');
    }

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataPokok'] = $this->Ppokok_model->select_all();

		$data['page'] = "Perdagangan";
		$data['judul'] = "Data Bahan Pokok";
		$data['deskripsi'] = "Manage Data Bahan Pokok";

		// $data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('Ppokok/home', $data);
	}

	public function tampil() {
		$data['dataPokok'] = $this->Ppokok_model->select_all();
		$this->load->view('Ppokok/list_data', $data);
	}
}