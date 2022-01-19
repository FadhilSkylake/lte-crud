<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppenting_model extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM perdagangan_penting";

		$data = $this->db->query($sql);

		return $data->result();
	}

    public function update($data) {
		$sql = "UPDATE perdagangan_penting SET komoditi ='" .$data['komoditi'] ."', satuan='" .$data['satuan'] ."', harga='" .$data['harga'] ."',ket=" .$data['ket'] ." WHERE id='" .$data['id_no'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_no) {
		$sql = "DELETE FROM perdagangan_penting WHERE id_no='" .$id_no ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id_no = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO perdagangan_penting VALUES('{$id_no}','" .$data['komoditi'] ."','" .$data['satuan'] ."'," .$data['harga'] ."," .$data['ket'] .",1)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
