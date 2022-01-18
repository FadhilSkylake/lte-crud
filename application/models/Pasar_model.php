<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasar_model extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM pasar";

		$data = $this->db->query($sql);

		return $data->result();
	}

    public function update($data) {
		$sql = "UPDATE pasar SET nama_pasar ='" .$data['nama_pasar'] ."', jenis_pasar='" .$data['jenis_pasar'] ."', alamat_pasar='" .$data['alamat_pasar'] ."', ket=" .$data['ket'] ." WHERE id='" .$data['id_no'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_no) {
		$sql = "DELETE FROM pasar WHERE id_no='" .$id_no ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id_no = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO pasar VALUES('{$id_no}','" .$data['nama_pasar'] ."','" .$data['nama_pasar'] ."','" .$data['jenis_pasar'] ."','" .$data['alamat_pasar'] ."'," .$data['ket'] .",1)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
