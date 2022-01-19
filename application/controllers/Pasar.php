<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasar extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Pasar_model');
	}

	public function front() {
        $this->load->view('front/pasar');
	}
	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataPasar'] = $this->Pasar_model->select_all();

		$data['page'] = "pasar";
		$data['judul'] = "Data Pasar";
		$data['deskripsi'] = "Manage Data Pasar";

		// $data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('pasar/home', $data);
	}

	public function tampil() {
		$data['dataPasar'] = $this->Pasar_model->select_all();
		$this->load->view('pasar/list_data', $data);
	}
}