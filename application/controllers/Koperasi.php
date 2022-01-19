<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Koperasi_model');
	}
	
	public function front() {
        $this->load->view('front/koperasi');
    }

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataKoperasi'] = $this->Koperasi_model->select_all();

		$data['page'] = "Koperasi";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Manage Data Koperasi";

		// $data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('koperasi/home', $data);
	}

	public function tampil() {
		$data['dataKoperasi'] = $this->Koperasi_model->select_all();
		$this->load->view('koperasi/list_data', $data);
	}
}