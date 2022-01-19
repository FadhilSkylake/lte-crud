<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi_model extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM koperasi";

		$data = $this->db->query($sql);

		return $data->result();
	}

    public function update($data) {
		$sql = "UPDATE koperasi SET jenis_koperasi ='" .$data['jenis_koperasi'] ."', nama_koperasi='" .$data['nama_koperasi'] ."', desa='" .$data['desa'] ."', kecamatan=" .$data['kecamatan'] ." WHERE id='" .$data['id_no'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_no) {
		$sql = "DELETE FROM koperasi WHERE id_no='" .$id_no ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id_no = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO koperasi VALUES('{$id_no}','" .$data['jenis_koperasi'] ."','" .$data['nama_koperasi'] ."'," .$data['desa'] ."," .$data['kecamatan'] .",1)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
