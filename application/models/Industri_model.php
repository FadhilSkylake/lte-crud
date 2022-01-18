<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industri_model extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM industri";

		$data = $this->db->query($sql);

		return $data->result();
	}

    public function update($data) {
		$sql = "UPDATE industri SET nama_perusahaan ='" .$data['nama_perusahaan'] ."', alamat_perusahaan='" .$data['alamat_perusahaan'] ."', ket=" .$data['ket'] ." WHERE id='" .$data['id_perusahaan'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_perusahaan) {
		$sql = "DELETE FROM industri WHERE id_perusahaan='" .$id_perusahaan ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id_perusahaan = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO industri VALUES('{$id_perusahaan}','" .$data['nama_perusahaan'] ."','" .$data['alamat_perusahaan'] ."'," .$data['ket'] .",1)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
