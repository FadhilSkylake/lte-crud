<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umkm extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Umkm_model');
	}
	
	public function front() {
        $this->load->view('front/umkm');
    }

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataUmkm'] = $this->Umkm_model->select_all();

		$data['page'] = "Umkm";
		$data['judul'] = "Data Umkm";
		$data['deskripsi'] = "Manage Data Umkm";

		// $data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('umkm/home', $data);
	}

	public function tampil() {
		$data['dataUmkm'] = $this->Umkm_model->select_all();
		$this->load->view('umkm/list_data', $data);
	}
}