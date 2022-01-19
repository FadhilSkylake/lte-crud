<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppokok_model extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM perdagangan_pokok";

		$data = $this->db->query($sql);

		return $data->result();
	}

    public function update($data) {
		$sql = "UPDATE perdagangan_pokok SET nama_bahan_pokok ='" .$data['nama_bahan_pokok'] ."', volume='" .$data['volume'] ."', harga_kemarin='" .$data['harga_kemarin'] ."', harga_hari_ini='" .$data['harga_hari_ini'] ."', perubahan='" .$data['perubahan'] ."', ket=" .$data['ket'] ." WHERE id='" .$data['id_no'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_no) {
		$sql = "DELETE FROM perdagangan_pokok WHERE id_no='" .$id_no ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id_no = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO perdagangan_pokok VALUES('{$id_no}','" .$data['nama_bahan_pokok'] ."','" .$data['volume'] ."'," .$data['harga_kemarin'] ."," .$data['harga_hari_ini'] ."," .$data['perubahan'] ."," .$data['ket'] .",1)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
