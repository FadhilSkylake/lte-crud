<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industri extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Industri_model');
	}
	
	public function front() {
        $this->load->view('front/perindustrian');
    }

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataPerusahaan'] = $this->Industri_model->select_all();

		$data['page'] = "industri";
		$data['judul'] = "Data Perusahaan";
		$data['deskripsi'] = "Manage Data Perusahaan";

		// $data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('industri/home', $data);
	}

	public function tampil() {
		$data['dataPerusahaan'] = $this->Industri_model->select_all();
		$this->load->view('industri/list_data', $data);
	}
}