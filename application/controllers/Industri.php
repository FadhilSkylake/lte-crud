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

		$data['modal_tambah_perusahaan'] = show_my_modal('modals/modal_tambah_perusahaan', 'tambah-perusahaan', $data);

		$this->template->views('industri/home', $data);
	}

	public function tampil() {
		$data['dataPerusahaan'] = $this->Industri_model->select_all();
		$this->load->view('industri/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'trim|required');
		$this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'trim|required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->Industri_model->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Perusahaan Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Perusahaan Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update() {
		$id = trim($_POST['id_perusahaan']);

		$data['dataPegawai'] = $this->Industri_model->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_perusahaan', 'update-perusahaan', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'trim|required');
		$this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'trim|required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->Industri_model->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Perusahaan Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Perusahaan Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete() {
		$id = $_POST['id_perusahaan'];
		$result = $this->Industri_model->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Perusahaan Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Perusahaan Gagal dihapus', '20px');
		}
	}
}